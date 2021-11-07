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

Route::get('/login',function(){
    return view('login');
});
 
Route::get('/bankDetails',function(){

    $data=App\Bdetails::all();

    return view('bankdetails')->with(Bdetails,$data);
});

Route::get('/addBankDetails',function(){
    return view('addBankdetails');
});

Route::post('/saveDetails','bankDetailsController@saveDetails');