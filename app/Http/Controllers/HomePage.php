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

    public function create(){
        return view('views.create');
    }

    public function cassa(Request $request){
        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255' ,
            'release_date' => 'required|date',
            'pages' => 'required|numeric',
        ]);

        $comic = Comic::create($data);

        return redirect() -> route('comic', $comic -> id);
        
    }
}
