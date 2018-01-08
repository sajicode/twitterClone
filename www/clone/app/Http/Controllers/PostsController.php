<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller

{

    //let's prevent guests from viewing post creation page
    public function __construct() {

        $this->middleware('auth')->except(['index', 'showPosts', 'details']);

    }

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

        auth()->user()->publish(

            new Post(request(['message']))

        );
        // Post::create([

        //     'message' => request('message'),

        //     'user_id' => auth()->id()
        // ]);

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
