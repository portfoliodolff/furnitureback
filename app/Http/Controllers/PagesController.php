<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        // $title = " Overviewc";
        return view("pages.overview", compact('title'));

    }
}
