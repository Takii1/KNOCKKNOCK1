<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Images;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function Index()
    {
        $item = Products::all();
        $pics = Images::all();

        return view('AllProduct',compact('item','pics'));
    }

    public function CreateProduct()
    {
        $type = Categories::all();
        $ip = request()->ip();
        $loc =Location::get($ip);

        return view('FrontEnd.Uploadproduct',compact('type','loc'));
    }
    public function SaveProduct(Request $request)
    {

        // $request->validate([

        //     'Product_name' => 'required',
        //     'Product_description' => 'required',
        //     'Rent_per_hour' => 'required',
        //     'Rent_per_day' => 'required',
        //     'image' => 'required'


        // ]);
     
        $prd = new Products();

        $prd->Product_name = $request->Prod_name;
        $prd->Product_description = $request->Prod_Descp;
        $prd->Category_Id = $request->Cat_ID;
        $prd->User_Id = Auth::id();
        $prd->Condition = $request->Condition;
        $prd->Insurance = $request->Insurance;
        $prd->Coordinates = $request->coords;
        $prd->Zipcode = $request->Zipcode;
        $prd->Region = $request->Region;
        $prd->Location = $request->Location;
        $prd->Rent_per_hour = 001;
        $prd->Rent_per_day = $request->RentPD;
        $prd->save();
        // dd($request->Photos);
        if($request->has('Photos')){
         foreach($request->file('Photos') as $image){

          $imageName =str_replace(' ','',$request->Prod_name).'-img-'.time().rand(1,1000).'.'.$image->extension();
           $image->move(public_path('ProductImages'),$imageName);
                    Images::create([
                        'products_id' => $prd->id,
                        'image'=>$imageName
                    ]);
                }
            }

        Auth::User()->assignRole('Vendor');


        return redirect(route('Uploadproduct'))->with('Msg','Product has been added successfully!');
    }

    public function EditProduct($id)
    {
        $products =json_decode(Products::where('id',$id)->get());
        // dd($products);
        $images = Images::where('Products_id',$id)->get();
        $type = Categories::all();
        return view('EditProduct',compact('products','images','type'));
    }
    public function UpdateProduct(Request $request,$id)
    {
        $prd = Products::find($id);

        $prd->Product_name = $request->Prod_name;
        $prd->Product_description = $request->Prod_Descp;
        $prd->Category_Id = $request->Cat_ID;
        // $prd->User_Id = Auth::id();
        $prd->Condition = $request->Condition;
        $prd->Insurance = $request->Insurance;
        $prd->Location = $request->Location;
        $prd->Rent_per_hour = $request->RentPH;
        $prd->Rent_per_day = $request->RentPD;
        $prd->save();

            if($request->has('Photos')){
                foreach($request->file('Photos') as $image){
                    $imageName =str_replace(' ','',$request->Prod_name).'-img-'.time().rand(1,1000).'.'.$image->extension();
                    $image->move(public_path('ProductImages'),$imageName);
                    Images::create([
                        'products_id' => $prd->id,
                        'image'=>$imageName
                    ]);
                }
            }


        return redirect(route('Uploadproduct'))->with('Msg','Product has been Edited successfully!');
    }

    public function DeleteProduct($id)
    {

        $del = Products::where('id',$id)->with('Images');
        $images = Images::where('Products_id',$id)->get();

        $count = count($images) ;
        for ($i=0; $i < $count; $i++) {

            $img = json_decode($images[$i]);
            unlink(public_path('ProductImages/'.$img->image));
            //Storage::disk('public')->delete('ProductImage'.$img->image);
        }


       $images->each->delete();$del->delete();

        return redirect(route('AllProduct'))->with('MsgDelete','Product deleted successfully');

    }

    public function RemovePicture($id)
    {
        $images = json_decode(Images::where('id',$id)->get());
        foreach ($images as $img) {
            $name = $img->image;
        }
        unlink(public_path('ProductImages/'.$name));
        Images::where('id',$id)->delete();
        return back();
    }
}
