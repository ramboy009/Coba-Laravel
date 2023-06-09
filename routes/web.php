<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContrller;

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

Route::get('/home' , [HomeContrller::class,'index']);


Route::get('/beranda' , [HomeContrller::class,'home']);
