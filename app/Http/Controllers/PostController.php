<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){

        $posts = Post::orderBy('created_at', 'desc')->paginate(1);
        // Fetch all posts from the database
        // and pass them to the view
        // The view will be located at resources/views/home.blade.php
        // The view will be passed an array of posts
        return view('home', ['articles' => $posts]);
    }

    public function show(Post $post){
        return view('detail', ['post' => $post]);
    }

    public function queryTest(){

        $postsByModel = Post::orderBy('created_at', 'desc')->get();
        dump($postsByModel);

        // DB est une façade qui permet d'interagir avec la base de données
        $postsByFacades = DB::table('posts')->get();
        dump($postsByFacades);

        $onePostByModel = Post::find(1);
        dump($onePostByModel);

        $onePostByFacades = DB::table('posts')->where('title','Sample Post');
        dump($onePostByFacades);

        return 'Success or failed';
    }

}
