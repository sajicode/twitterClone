@extends('layout.blog-entry')

@section('content')

    <div class="col-sm-8">

        <h1>Register</h1>

        <form method="POST" action="/register">

            {{ csrf_field() }}

            <div class="form-group">

                <label for="name">Name:</label>

                <input type="text" class="form-control" id="name" name="name" required>

            </div>

            <div class="form-group">

                <label for="email">Email:</label>

                <input type="email" class="form-control" id="email" name="email" required>

            </div>

            <div class="form-group">

                <label for="passwrod">Password:</label>

                <input type="password" class="form-control" id="password" name="password" required>

            </div>

            <div class="form-group">

                <label for="passwrod_confirmation">Confirm Password:</label>

                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">

            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Register</button>

            </div>

                @include('layout.errors')

        </form>

    </div>

@endsection