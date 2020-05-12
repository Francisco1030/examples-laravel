<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showForm() 
    {
        return view('create-post');
    }

    public function createPost(Request $request) 
    {
        var_dump($request);
    }
}
