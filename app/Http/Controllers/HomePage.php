<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class HomePage extends Controller
{
    public function store()
    {
        $comics = Comic::all();
        
        return view('views.store', compact('comics'));
    }

    public function comic($id)
    {
        $comic = Comic::findOrFail($id);
        return view('views.comic', compact('comic'));
    }
}
