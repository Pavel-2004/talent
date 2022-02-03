<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", function (){
    return view("index");
});

Route::get("/setup", function (){
    return view("setup");
});

Route::get("/setup/new-test", function(){
    return view("newTest");
});

Route::get("about-one", function(){
    return view("about-one");
});


Route::get("about-two", function (){
    return view("about-two");
});

Route::get("about-three", function (){
    return view("about-three");
});


Route::get("get-started", function (){
    return view("get-started");
});

Route::get("faq", function (){
    return view("faq");
});

Route::get("overview", function (){
    return view("overview");
});

Route::get("overview-specific", function (){
    return view("overview-specific");
});

Route::get("overview-specific/method", function (){
    return view("method");
});
