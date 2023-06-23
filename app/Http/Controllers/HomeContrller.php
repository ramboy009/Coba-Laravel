<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeContrller extends Controller
{
    public function index(){
        return view ('home',["title" => "home"]);
    }

    public function home()
    {
       return view('index');
    }

    public function register(){
        return view ('login.register',["title" => "register"]);
    }

    public function login(){
        return view ('login.login',["title" => "login"]);
    }
}
