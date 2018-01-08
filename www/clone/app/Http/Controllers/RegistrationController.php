<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidateUserRegData;

use App\User;

class RegistrationController extends Controller
{
    public function create() {

        $title = "User Register";

        return view('registration.create', compact('title'));

    }

    public function store(ValidateUserRegData $request) {

        $user = User::create([

            'name' => request('name'),

            'email' => request('email'),

            'password' => bcrypt(request('password'))

        ]);

        auth()->login($user);

        return redirect('/posts');
    }
}
