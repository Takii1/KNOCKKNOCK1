<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Products;
use Illuminate\Support\Collection;
use App\Models\BankDetails;
use App\Models\User;
use App\Models\reports;
use Illuminate\Support\Arr;


class VendorController extends Controller
{
    public function VendorPayment()
    {
        $now = now();
        $weekStartDate = $now->copy()->subWeek()->startOfWeek()->format('Y-m-d 00:00:00');
        $weekEndDate = $now->copy()->subWeek()->endOfWeek()->format('Y-m-d 00:00:00');
        $total =Orders::whereBetween('End_date',[$weekStartDate,$weekEndDate])->where('Order_status','Completed')->distinct()->get('Vendor_Id');
        foreach($total as $t){
        $vendors[] = User::find($t->Vendor_Id);
        }
        return view('VendorPayment',compact('vendors'));
    }

   public function VendorShow()
   {

    return view('VendorPayment');
    }

    public function GetAcc()
    {
        $id = auth()->user()->id;
        $now = now();
        $weekStartDate = $now->copy()->subWeek()->startOfWeek()->format('Y-m-d');
        $weekEndDate = $now->copy()->subWeek()->endOfWeek()->format('Y-m-d');
        $total = Orders::whereBetween('End_date',[$weekStartDate,$weekEndDate])->where('Order_status','Completed')->get();
        $count = $total->count();
        $t = $total->sum('product_price_per_day');
        return view('frontEnd.Vendors',compact('t','count'));
    }
    public function saveAcc(Request $request)
    {

        $bank = new BankDetails();
        $bank->user_id = auth()->user()->id;
        $bank->Bank_name = $request->BName;
        $bank->Account_holder_name = $request->HName;
        $bank->Account_number = $request->Cnumber;

        $bank->save();

        return redirect()->back();
    }

    public function vendorReport($id)
    {
        $Bank = BankDetails::where('user_id',$id)->get();
        $now = now();
        $weekStartDate = $now->copy()->subWeek()->startOfWeek()->format('Y-m-d 00:00:00');
        $weekEndDate = $now->copy()->subWeek()->endOfWeek()->format('Y-m-d 00:00:00');

        $products = Products::where('User_Id',$id)->get();
        $products_total = $products->count() ;
        $prod_count = Orders::where('Vendor_Id',$id)->where('Order_status','Completed')->whereBetween('End_date',[$weekStartDate,$weekEndDate])->get();
        $count = $prod_count->count();
        $sum = $prod_count->sum('total_price');
        $sum_comm = $prod_count->sum('Service_charges');
        $payable = $sum - $sum_comm;

        $report_check =json_decode(reports::where('vendor_ID',$id)->where('till_date',$weekEndDate)->get());

        if($report_check == null){
            $report = new reports;
            $report->vendor_ID = $id;
            $report->from_date = $weekStartDate;
            $report->till_date = $weekEndDate;
            $report->total_Amount = $sum ;
            $report->total_Commission = $sum_comm;
            $report->payble = $payable;
            $report->save();

            return view('frontEnd.vendorsreport',compact('report','products_total','prod_count','Bank'));
        }else{
            $report = $report_check[0];
            return view('frontEnd.vendorsreport',compact('report','products_total','prod_count','Bank'));

        }
    }

    public function payVendor($id)
    {
        $rep = reports::find($id);
        $rep->Status = "Paid";
        $rep->update();
        dd($rep);
        return redirect()->back();
    }



}
