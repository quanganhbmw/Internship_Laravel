<?php

namespace App\Http\Controllers\frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function GetCart(){
        return view('FrontEnd.cart.cart');
    }
}
