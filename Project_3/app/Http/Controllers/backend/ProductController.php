<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Http\Requests\AddProductRequest;

class ProductController extends Controller
{
    function GeteditProduct(){
        return view('BackEnd.product.editproduct');
    }
    function GetListProduct(){
        return view('BackEnd.product.listproduct');
    }
    function GetAddProduct(){
        return view('BackEnd.product.addproduct');
    }
    function PostAddProduct(AddProductRequest $r){
        
    }
}
