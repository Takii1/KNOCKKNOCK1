<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class localizationController extends Controller
{
    
    public function setlang($locale){
        App::setLocale($locale);
        Session::put("locale",$locale);
        return redirect()->back();
    }
}
