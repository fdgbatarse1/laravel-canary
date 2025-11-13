<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles.index');
    }

    public function show($article)
    {
        return view('articles.show', compact('article'));
    }
}
