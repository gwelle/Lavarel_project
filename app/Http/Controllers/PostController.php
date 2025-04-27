<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        // compact() is a PHP function that creates an array from variables and their values
        // In this case, it creates an array with a key 'posts' and the value of the $posts variable
        // This is equivalent to ['posts' => $posts]
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // User is authenticated, show the create post form
            return view('posts.create');
        } else {
            // User is not authenticated, redirect to login page
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        // Create a new post instance
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        // Save the post to the database
        $post->save();
        // Redirect to the posts index page with a success message
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the post by its ID
        $post = Post::findOrFail($id);
        // Return the view with the post data
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the post by its ID
        $post = Post::findOrFail($id);
        // Return the edit view with the post data
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        // Find the post by its ID
        $post = Post::findOrFail($id);
        // Update the post data
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        // Save the updated post to the database
        $post->save();
        // Redirect to the posts index page with a success message
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the post by its ID
        $post = Post::findOrFail($id);
        // Delete the post from the database
        $post->delete();
        // Redirect to the posts index page with a success message
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
