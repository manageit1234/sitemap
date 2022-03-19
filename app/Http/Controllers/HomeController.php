<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show_post(){
        $posts = Post::all();
        return view('home', ['posts=>$posts']);
    }
}
