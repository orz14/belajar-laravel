<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home'
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About',
            'name' => 'Oriz Wahyu N.',
            'email' => 'orz@unwidha.ac.id',
            'image' => 'ak.png'
        ]);
    }
}
