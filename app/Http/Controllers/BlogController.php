<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function tentang()
    {
        return view('tentang');
    }
    public function project()
    {
        return view('project');
    }
    public function contact()
    {
        return view('contact');
    }
}
