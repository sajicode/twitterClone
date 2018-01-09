<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidateUploadRequest;

use App\UserAvatar;

class UploadsController extends Controller
{
    public function create() {

        $title = "Upload Avatar";

        return view('uploads.create', compact('title'));

    }

    public function store(ValidateUploadRequest $request) {

        $photo = request('photo');

        $filename = $photo->store('photos');

        UserAvatar::create([

            'bio' => request('bio'),

            'filename' => $filename,

            'user_id' => auth()->id()

        ]);

        return redirect('/posts');
    }
}
