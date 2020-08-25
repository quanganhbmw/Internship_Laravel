<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddUsersRequest;

class UserController extends Controller
{
    
    function GetAddUser(){
        return view('BackEnd.user.adduser');
    }
    function PostAddUser(AddUsersRequest $r){
        
    }
    function GetEditUser(){
        return view('BackEnd.user.edituser');
    }
    function GetListUser(){
        return view('BackEnd.user.listuser');
    }
}
