<?php

namespace App\Http\Controllers;
use app\Comic;
use Illuminate\Http\Request;

class HomePage extends Controller
{
    public function home()
    {
        return view('views.comic');
    }
}
