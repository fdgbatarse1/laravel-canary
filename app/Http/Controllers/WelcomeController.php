<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function index()
    {
        // dd('index');
        // dump('Message from WelcomeController@index');
        // Business logic can be added here if needed
        return view('welcome');
    }
}
