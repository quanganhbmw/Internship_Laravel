<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Http\Requests\CategoryRequest;
use  App\models\category;
class CategoryController extends Controller
{
    function GetAddCategory(){
        $data['categorys']= category::all()->toarray();
        return view('BackEnd.category.category',$data);
    }
    function PostAddCategory(CategoryRequest $r){
        $cate = new category;
        $cate->name= $r->name;
        $cate->slug=($r->name);
        $cate->parent=$r->parent;
        $cate->save();
        return redirect()->back()->with('thongbao','Đã thêm danh mục:'.$r->name);
    }
    function GetEditCategory(){
        return view('BackEnd.category.editcategory');
    }
}
