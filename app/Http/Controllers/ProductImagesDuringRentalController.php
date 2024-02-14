<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Products;
use App\Models\ProductImagesDuringRental;

class ProductImagesDuringRentalController extends Controller
{
    public function getForm()
    {
       $order = Orders::find(22);

       return view('frontEnd.beforeRent',compact('order'));

    }
    public function beforerent(Request $req)
    {
        $check = ProductImagesDuringRental::where('order_id',$req->order_id)->where('rentee_id',$req->rentee_id)->latest();

        if($check){
        $pId = $req->product_id;
        $owner = Products::find($pId);
        $pir = new ProductImagesDuringRental();
        $pir->product_id = $req->product_id;
        $pir->order_id = $req->order_id;
        $pir->product_owner = $owner->User_Id;
        $pir->rentee_id = $req->rentee_id;
        if($req->has('Photos')){

                foreach($req->file('Photos') as $image){
                 $imageName =str_replace(' ','',"Before").'-img-'.time().rand(1,1000).'.'.$image->extension();
                  $image->move(public_path('beforeImages'),$imageName);
                          $allImages[]= $imageName ;
                       }
                   }
        $pir->imagesBeforeRent= json_encode($allImages);
        $pir->save();
        return redirect()->back()->with('MSG','You already submitted Pictures !!!');
        }

    }

    public function afterrent(Request $req)
    {
        $pir = new ProductImagesDuringRental();
        if($req->has('Photos')){

                foreach($req->file('Photos') as $image){
                 $imageName =str_replace(' ','',"After").'-img-'.time().rand(1,1000).'.'.$image->extension();
                  $image->move(public_path('afterImages'),$imageName);
                          $allImages[]= $imageName ;
                       }
                   }
        $pir->imageAfterRent= json_encode($allImages);
        $pir->save();

        return redirect()->back();
    }
}
