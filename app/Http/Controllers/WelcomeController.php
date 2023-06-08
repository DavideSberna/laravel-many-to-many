<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // Codice per ottenere il contenuto che desideri visualizzare nella route principale
        $contents = Post::all();

        return view('home', compact('contents'));
    }

    public function show(Post $post)
    {
        return view('show', compact('post'));
    }
}
