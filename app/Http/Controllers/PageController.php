<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index() { 
        return 'Selamat Datang'; 
    }

    public function about() { 
        return 'Yonatan Efrassetyo - 2241720063'; 
    }

    public function articles($Id) { 
        return 'Halaman Articles dengan id '.$Id; 
    }
}
