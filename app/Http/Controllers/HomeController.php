<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
    * @Render Home Page
    */
    public function index()
    {
    	return view('home.index');
    }
}
