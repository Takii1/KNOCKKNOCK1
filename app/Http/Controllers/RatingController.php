<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Orders;

class RatingController extends Controller
{

    public function store(Request $request)
    {
        $rating = $request->rating;
        $product_id = $request->rateable_id;
        $comment = $request->comment;
        $user_ID = Auth::id();
        //Geting Order details

        $ord_details = Orders::where('User_id',$user_ID)->where('Product_id',$product_id)->latest('updated_at')->first();
        // dd($ord_details);
        if( $ord_details){

            // Checking for existing rating
            $exsting_rating = Rating::where('order_id', $ord_details->id)->first();
            if ($exsting_rating) {

                $MSG = 'Thanks you for Rating this product';
                return redirect()->back()->withErrors($MSG);

            }else{
                Rating::create([
                    'user_id' =>$user_ID ,
                    'product_id' => $product_id,
                    'order_id' => $ord_details->id,
                    'rating' =>$rating,
                    'comment' => $comment
                ]);
                return redirect()->back()->with('rating','Thanks you for Rating this product');
            }

        }
        // else{
        //     return redirect()->back()->with('Cannot rating this product');
        // }

        return back();
    }
}
