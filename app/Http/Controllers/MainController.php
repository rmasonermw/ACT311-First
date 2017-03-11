<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function index(){
        return "<h1> Howdy</h1>";
    }

    public function about(){
        return "<h1> About page</h1>";
    }
}
