<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function GetDetailOrder(){
        return view('BackEnd.order.detailorder');
    }
    function GetOrder(){
        return view('BackEnd.order.order');
    }
    function GetProcessed(){
        return view('BackEnd.order.processed');
    }
}
