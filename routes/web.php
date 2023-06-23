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


Route::get('/' , [HomeContrller::class,'home']);

Route::get('/register' , [HomeContrller::class,'register']);

Route::get('/login' , [HomeContrller::class,'login']);

// Route::get('/register', function () {
//     return view('login.register',[
//         'title' => 'Register'
//     ]);
// });

// Route::get('/login', function () {
//     return view('login.login',[
//         'title' => 'Login'
//     ]);
// });