<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller

{
 public function beranda(){
    return view('Dashboard.beranda', [
        'title' => 'beranda'
    ]);
    } 

    public function keterangan()
    {
        return view('Dashboard.keterangan', [
            'title' => 'keterangan'
        ]);
    }
}