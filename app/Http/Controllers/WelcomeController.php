<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() { 
        return 'Hello World'; 
    }

    // public function greeting(){
    //     return view('blog.hello', ['name' => 'Yonatan Efrassetyo']);
    // }

    public function greeting(){
        return view('blog.hello')
        ->with('name','Yonatan Efrassetyo')
        ->with('occupation','Astronaut');
    }   
}


