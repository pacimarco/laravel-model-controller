<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('homepage');
    }

    public function list(){
        return view('movie_list');
    }
}
