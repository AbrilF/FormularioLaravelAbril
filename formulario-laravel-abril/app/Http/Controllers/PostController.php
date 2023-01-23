<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __invoke()
    {
        return view('inicio');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'timestamps' => 'required',
            'title' => 'required',
            'description' => 'required',
            'contenido' => 'required',
            'caducable' => 'required',
            'comentable' => 'required',
            'acceso' => 'required',
        ]);

        $post = new Post();
        $post->id = $request->id;
        $post->timestamps = $request->timestamps;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->contenido = $request->contenido;
        $post->caducable = $request->caducable;
        $post->comentable = $request->comentable;
        $post->acceso = $request->acceso;
        $post->save();

        return redirect()->route('inicio');
    }

        public function create()
        {
            return view('inicio');
            return view('inicio' , [
                'post' => $Post::with('user')->get()]);

    }
    
}

