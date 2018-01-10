<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\UploadedFile;

class ImageController extends Controller
{
    public function showImage($id) {

        $file = $request->file('photo')->find($id);

        return view('posts.profile', compact('file'));

    }
}
