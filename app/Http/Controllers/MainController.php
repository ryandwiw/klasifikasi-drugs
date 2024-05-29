<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('main.index');
    }

    public function loginindex(){
        return view('main.login');
    }

    public function about(){
        return view('main.about');
    }

    public function feature(){
        return view('main.feature');
    }
    public function tim(){
        return view('main.tim');
    }
}
