<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Post;

class ProfileController extends Controller
{

    public function __construct() {

        $this->middleware('auth');

    }

    public function create($id) {

        $title = "Profile";

        $user = User::all()->find($id);

        // $posts = Post::all()->find($id);

        return view('posts.profile', compact('title', 'user'));
    }
}
