<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route FrontEnd

//index
 Route::get('','frontends\IndexController@GetIndex');
 Route::get('about','frontends\IndexController@GetAbout');
 Route::get('contact','frontends\IndexController@GetContact');

 //product
 Route::group(['prefix' => 'product'], function () {
    Route::get('detail','frontends\productController@GetDetail');
    Route::get('shop','frontends\productController@GetShop');
 });

 //checkout
 Route::group(['prefix' => 'checkout'], function () {
    Route::get('','frontends\CheckoutController@GetCheckout');
    Route::post('','frontends\CheckoutController@PostCheckout');
    Route::get('complete','frontends\CheckoutController@GetComplete');
 });
 
 //cart 
 Route::group(['prefix' => 'cart'], function () {
    Route::get('','frontends\CartController@GetCart');
 });




//Route BackEnd

//Login
Route::get('login','backend\LoginController@GetLogin')->middleware('CheckLogout');
Route::post('login','backend\LoginController@PostLogin');

Route::group(['prefix' => 'admin','middleware'=>'CheckLogin'], function () {
    //index
    Route::get('','backend\IndexController@GetIndex');
    Route::get('logout','backend\IndexController@logout');

    //category
    Route::group(['prefix' => 'category'], function () {
        Route::get('','backend\CategoryController@GetAddCategory');
        Route::post('','backend\CategoryController@PostAddCategory');
        Route::get('editcategory','backend\CategoryController@GetEditCategory');

    });

    //User 
    Route::group(['prefix' => 'user'], function () {
        Route::get('adduser','backend\UserController@GetAddUser');
        Route::post('adduser', 'backend\UserController@PostAddUser');
        Route::get('listuser','backend\UserController@GetListUser');
        Route::get('edituser','backend\UserController@GetEditUser');

    });

    //Product
    Route::group(['prefix' => 'product'], function () {
        Route::get('addproduct','backend\ProductController@GetAddProduct');
        Route::post('addproduct', 'backend\ProductController@PostAddProduct');
        Route::get('editproduct','backend\ProductController@GeteditProduct');
        Route::get('listproduct','backend\ProductController@GetListProduct');

    });

    //Order
    Route::group(['prefix' => 'order'], function () {
        Route::get('detailorder','backend\OrderController@GetDetailOrder');
        Route::get('','backend\OrderController@GetOrder');
        Route::get('processed','backend\OrderController@GetProcessed');

    });


});