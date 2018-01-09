<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidateUploadRequest;

use App\UserAvatar;

class UploadsController extends Controller
{

    //let's prevent guests from viewing post creation page
    public function __construct() {

        $this->middleware('auth');

    }

    public function create() {

        $title = "Upload Avatar";

        return view('uploads.create', compact('title'));

    }

    public function store(ValidateUploadRequest $request) {

        $photo = request('photo');

        $filename = $photo->store('public');

        UserAvatar::create([

            'bio' => request('bio'),

            'filename' => $filename,

            'user_id' => auth()->id()

        ]);

        return redirect('/posts');
    }
}
