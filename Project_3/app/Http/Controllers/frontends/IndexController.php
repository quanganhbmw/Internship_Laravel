<?php

namespace App\Http\Controllers\frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function GetIndex(){
        return view('FrontEnd.index');
    }
    function GetAbout(){
        return view('FrontEnd.about');
    }
    function GetContact(){
        return view('FrontEnd.contact');
    }
}
