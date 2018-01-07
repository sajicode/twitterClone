@extends('layout.blog-home-master')

@section('content')

    <h1>Create a Post</h1> 

    <form method="POST" action="/posts">

        {{ csrf_field() }}

        <div class="form-group">

            <label for="message">Post:</label>

            <textarea id="message" name="message" class="form-control"></textarea>

        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primary">Publish</button>

        </div>

        @include('layout.errors')
        
    </form>

    

@endsection