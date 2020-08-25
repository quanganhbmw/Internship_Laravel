<?php

namespace App\Http\Controllers\frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    function GetDetail(){
        return view('FrontEnd.product.detail');
    }
    
    function GetShop(){
        return view('FrontEnd.product.shop');
    }
}
