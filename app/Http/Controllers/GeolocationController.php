<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
class GeolocationController extends Controller
{
    public function index(Request $request)
    {
       $ip = request()->ip();
       //$ip ='119.73.96.13';
      $data =Location::get($ip);

        
        return view("welcome",compact('data'));
    }
}
