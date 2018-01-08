<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Comment;

class CommentsController extends Controller
{
    public function store($id) {

        $post = Post::all()->find($id);

        Comment::create([

            'post_id' => $post->id,

            'body' => request('body'),

            'user_id' => auth()->id()
        ]);

        return back();

    }
}
