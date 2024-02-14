<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Images;
use App\Models\Products;
use App\Models\User;
use App\Models\Carts;
use App\Models\Orders;
use App\Notifications\RentRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;

use Stripe;

class HomeController extends Controller
{
    //Home Function
    public function Home()
    {

        $today =  date("yy-mm-dd 00:00:00");
        $reset = null;//Orders::where('End_date', '=', $today)->get();
        if ($reset) {
            foreach ($reset as $rst) {
                $prod = Products::find($rst->Product_id);
                $prod->Booked = 0;
                $prod->save();
            }
        }
        $cat = Categories::all();
        return view('frontEnd.Home', compact('cat'));
    }
    // Main Search Function
    public function getProducts(Request $request)
    {
        try {
            $loc = $request->Location;
            $cat = $request->Category;
            $strt = $request->PickUp;
            $end = $request->DropOff;
            $products = Products::with('Images')->search(request($loc,))->where('Category_Id', $cat)->paginate(20);
            return view('frontEnd.Result', compact('products'));
        } catch (\Exception $exception) {
            return view('frontEnd.Result',)->with('MSG', 'No items are availbe during this duration');
        }
    }
    // searching product by name

    public function getsearch(Request $request)
    {
        try {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $products = products::with('images')->where('Product_name', '=', '%$search%')->get();
        } else {

            $products = products::with('Images')->get();
        }
        return view('frontEnd.Result', compact('products'));
        } catch (\Exception $exception) {
            return view('frontEnd.Result',)->with('MSG', "Items are not available at this time");
        }
    }




    public function getDetails($id)
    {
        $product = Products::find($id);
        $dates = null;
        if ($product->Booked == 1) {

            $dates = Orders::where('Product_id', $product->id)->latest('created_at')->first();
        }
        $singleImg = json_decode(Images::where('products_id', $product->id)->limit(1)->get());
        // dd($singleImg);
        $images = Images::where('products_id', $product->id)->get();
        $usr = User::find($product->User_Id);
        return view('frontEnd.product', compact('product', 'images', 'usr', 'dates','singleImg'));
    }


    public function add_cart($id, Request $request)
    {

        $dat = $request->date[0];

        $date = explode('-', $dat);
        $strt = strtotime($date[0]);
        $end = strtotime($date[1]);
        $period = floor(($end - $strt) / (60 * 60 * 24) + 1);

        if (Auth::id()) {

            $user = Auth::User();
            $product = products::find($id);
            $cart = new Orders();

            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->mobilePhone;
            $cart->address = $user->address;
            $cart->User_id = $user->id;
            $cart->Vendor_Id = $product->User_Id;
            $cart->product_name = $product->Product_name;
            $cart->product_price_per_day = $product->Rent_per_day * $period;
            $commision = ($product->Rent_per_day * $period / 100) * 5;
            $cart->Service_charges = $commision;
            $cart->total_price =  $product->Rent_per_day * $period + $commision;
            $cart->Product_id = $product->id;
            $cart->Start_date = $date[0];
            $cart->End_date = $date[1];



            if($cart->save()) {
                $User = User::find($product->User_Id);
                $User->notify(new RentRequest($User, $cart));
            }

            return redirect()->back()->with('MSGreq','Your request to rent this product has been sent');
        } else {
            return redirect(route('login'));
        }
    }

    public function stripe($total_price)
    {
        return view('FrontEnd.stripe', compact('total_price'));
    }

    public function stripePost(Request $request, $total_price)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([
            "amount" => $total_price * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Thanks for Payment."
        ]);


        $user = Auth::user();
        $userid = $user->id;

        $order= Orders::where('User_id', '=', $userid)->where('Order_status','Pending')->get();
            foreach($order as $od){
            if ($order) {
                $od->Order_status = "Confirmed";
                $od->save();
                $pro = Products::find($od->Product_id);
                $pro->Booked = 1;
                $pro->update();
            }
        }

        Session::flash('success', 'Payment successful!');

        return back();
    }
}
