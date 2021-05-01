<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index' , 'show']);
    }


    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->get()
        ]);
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required' , 'string' , 'max:255'],
            'content' => 'required'
        ]);

        Post::create([
            'title' => $request['title'],
            'content' => $request['content'],
            'user_id' => auth()->id(),
            'updated_at' => null
        ]);

        return redirect()->route('posts.index');
    }


    public function show(Post $post)
    {
//        dd($post);
        return view('posts.show', ['post' => $post]);
    }


    public function edit(Post $post)
    {
//        dd($post);
        return view('posts.edit', ['post' => $post]);
    }


    public function update(Request $request, Post $post)
    {

//        dd($post);

        $post->fill($request->all())->save();
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('status', 'post deleted success');
    }
}
