<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Carts;
use App\Models\Orders;
use App\Models\User;
use App\Notifications\AprovedNotification;
use App\Notifications\BookingDeclinedNotification;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function rental()
    {
        if(auth()->user()->notifications != null && auth()->user()->notifications == ""){
            $date = date("yy-mm-dd 00:00:00");
            $tabData =Orders::where('User_id',auth()->user()->id)->where('Start_date','>=',$date)->where('Order_status','Confirmed')->get();
        return view('frontEnd.rentals',compact('tabData'));
        }else{
            return view('frontEnd.rentals')->with('check',"ok");
        }
    }
    public function completedBookings()
    {
        $ConfirmedOrders = json_decode(Orders::where('Order_status','Completed')->where('User_id',auth()->user()->id)->get());
        return view('frontEnd.completeBooking',compact('ConfirmedOrders'));
    }
    public function cancelledBookings()
    {
        $userId = \auth()->user()->id;
        $cancelledOrders = json_decode(Orders::where('Order_status','Cancelled')->where('User_id',$userId)->get());
        return view('frontEnd.cancelledBooking',compact('cancelledOrders'));
    }

    public function approved($id, Request $req)
    {
        $cart = Orders::find($id);
        $User = User::find($cart->User_id);
        $notID = $req->nID;
        if($notID){
                auth()->user()->notifications->where('id',$notID)->markAsRead();
        }
        $User->notify(new AprovedNotification($cart));
        return redirect()->back();
    }

    public function checkout($id)
    {
        $cart = Orders::find($id);
        return view('frontEnd.checkout',compact('cart'));
    }
    public function bookingDelined($id,Request $req)
    {
        $cart = Orders::find($id);
        
        $User = User::find($cart->User_id);
        $notID = $req->nID;
        if($notID){
                auth()->user()->notifications->where('id',$notID)->markAsRead();
        }
        $User->notify(new BookingDeclinedNotification($cart));
        return redirect()->back();
    }

    public function asRead($id)
    {
        if($id){
            auth()->user()->notifications->where('id',$id)->markAsRead();
        }
        return redirect()->back();
    }


}
