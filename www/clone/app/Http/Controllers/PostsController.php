<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index() {

        $title = "Homepage";

        return view('posts.index', compact('title'));
    }

    // 
    
    public function create() {

        $title = "Create post";

        return view('posts.create', compact('title'));
    }

    public function store() {

        $this->validate(request(), [

            'message' => 'required|max:280'
        ]);

        //$title = "Posts";

        Post::create([

            'message' => request('message')
        ]);

        return redirect('/posts');
    }

    public function showPosts() {

        $title = "Posts";
        $posts = Post::latest()->get();

        return view('posts.home', compact('title', 'posts'));
    }

    public function details($id) {

        $title = "Post Details";
        $post = Post::all()->find($id);

        return view('posts.details', compact('title', 'post'));
    }
}
