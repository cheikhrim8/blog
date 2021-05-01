<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, Post $post)
    {
        $this->validate($request,[
            'comment' => 'required'
        ]);

        Comment::create([
            'user_id' => auth()->id(),
            'post_id' => $post->id,
            'comment' => $request['comment']
        ]);

        return redirect()->back();
    }
}
