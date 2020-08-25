<?php

namespace App\Http\Controllers\frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CheckOutRequest;

class CheckoutController extends Controller
{
    function GetCheckout(){
        return view('FrontEnd.checkout.checkout');
        }
        function PostCheckout(CheckOutRequest $r){
          
            }
    function GetComplete(){
        return view('FrontEnd.checkout.complete');
    }
}
