<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class SessionsController extends Controller
{

    //lets make login visible to just guests
    public function __construct() {

        $this->middleware('guest', ['except' => 'destroy']);

    }
    public function create() {
        
        $title = "User Login";

        $posts = Post::latest();

        if($month = request('month')) {

            $posts->whereMonth('created_at', Carbon::parse($month)->month);

        }

        if($year = request('year')) {

            $posts->whereYear('created_at', $year);
            
        }

        $posts = $posts->get();

    }

    public function store() {

        if(auth()->attempt(request(['email', 'password']))); {

            return redirect('/posts');

       }
        
        return back()->withErrors([

             'message' => 'Please check your credentials and try again'

        ]);

    }

    public function destroy() {

        auth()->logout();

        return redirect('/posts');
    }
}
