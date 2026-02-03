<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{

     public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

  
    public function Math()
    {
        return view('course');
    }
    
    public function batch(){
        return view('batch');
    }

    public function result(){
        return view('result');
    }

    public function study(){
        return view('study');
    }
}
