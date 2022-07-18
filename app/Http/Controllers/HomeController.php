<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomeGet()
    {
        return view('main.home');
    }
}
