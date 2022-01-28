<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Comic;

class HomePage extends Controller
{
    public function store()
    {
        $comics = Comic::all();
       /*  pp($comics); */
        
        return view('views.store'/* , compact('comics') */);
    }

    public function comic($id)
    {
        return view('views.comic');
    }
}
