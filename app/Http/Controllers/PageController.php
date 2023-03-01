<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo'Selamat Datang';
    }

    public function about(){
        echo'Valentino Malakianno - 2141720099';
    }

    public function articles($id){
        echo'halaman Artikel dengan '.$id;
    }
}
