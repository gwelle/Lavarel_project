<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        // Fetch all posts from the database
        // and pass them to the view
        // The view will be located at resources/views/home.blade.php
        // The view will be passed an array of posts
        return view('home', ['articles' => Post::all()]);
    }

    public function show(Post $post){
        return view('detail', ['post' => $post]);
    }
}
