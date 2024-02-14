<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;


class CategoryController extends Controller
{
    public function AddCategory(){


        return view("AddCategory");
    }
    public function SaveCategory(Request $request)
    {

       
     
      $Cat = new Categories();
        
        $Cat->Category_name = $request->Cat_name;
        $Cat->Category_status = $request->Cat_status;

        $Cat->save();




        return redirect(route('AllCategory'))->with('Msg','Data added successfully');
    }


    public function AllCategory(){

        $Page = Categories::all();

        return view("AllCategory", compact('Page'));
    }

    public function DeleteCategory($id)
    {
        Categories::find($id)->delete();

        return redirect(route('AllCategory'))->with('MsgDelete','Category deleted successfully');

    }
    
}
