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

Route::get('/hello', function () {
    return view('hello');
});
Route::get("enter/{name}/{id}",function ($uname,$uid) {
    return "$uid $uname Enter The Chat Room"; 
    
})->where(['name'=>'[A-Z,a-z]+','id'=>'[0-9]+']);//Validate Enterd Parameter By regular Expression

Route::get('next/{name)/{id}',function($uname,$uid){
    return"$uid $uname Enter The Chat Room";
})->where(['name'=>'[A-Z,a-z]+','id'=>'[0-9]+']);//validate with Larval helper function using whereAlpha and whereNumber frunction

Route::view("contact","/contact")->name(contactus);//it is you to give name to our root
Route::view("about","/about");//second method to pass view 

