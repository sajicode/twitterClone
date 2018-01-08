<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Comment;

class CommentsController extends Controller
{
    public function store() {

        // $post = Post::all()->find($id);

        // Comment::create([

        //     'post_id' => $post->id,

        //     'body' => request('body')
        // ]);

        auth()->user()->reply(

            new Comment(request(['body']))

        );

        return back();

    }
}
