<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', Auth::id())->latest()->get(); 
        return view('auth.index', compact('posts'));
    }

    public function create()
    {
        return view('auth.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => Auth::id(), // set the user ID here
        ]);

        return redirect()->route('auth.index')->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        return view('auth.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('auth.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required',
        ]);

        $post->update($request->only('title', 'body'));

        return redirect()->route('auth.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('auth.index')->with('success', 'Post deleted successfully.');
    }
}
