<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Carbon\Carbon;

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
        
        return redirect('/posts');
    }

    public function showPosts() {

        $title = "Posts";
        
        $posts = Post::latest();

        if($month = request('month')) {

            $posts->whereMonth('created_at', Carbon::parse($month)->month);

        }

        if($year = request('year')) {

            $posts->whereYear('created_at', $year);
            
        }

        $posts = $posts->get();

        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')

            ->groupBy('year', 'month')

            ->orderByRaw('min(created_at) desc')

            ->get()

            ->toArray();

        return view('posts.home', compact('title', 'posts', 'archives'));
    }

    public function details($id) {

        $title = "Post Details";

        $post = Post::all()->find($id);

        return view('posts.details', compact('title', 'post'));
    }
}
