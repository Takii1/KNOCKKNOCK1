<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Carts;
use App\Models\Orders;

class OrdersController extends Controller
{
    public function Orders()
    {
        $order = Orders::paginate(10);
        $list = Orders::where('Order_status','Confirmed')->Orwhere('Order_status','Completed')->get();
        $count = $list->count() ;
        $commission = Orders::where('Order_status','Completed')->sum('Service_charges');
        return view('Orders' , compact('order','count','commission'));
    }


}
