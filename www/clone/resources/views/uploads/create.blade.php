@extends('layout.blog-home-master')

@section('content')

    <div class="col-sm-8">

        <h1>Upload Details</h1>

        <form action="/upload" method="POST" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group">

                <label for="bio">Bio</label>

                <textarea type="text" name="bio" id="bio" class="form-control"></textarea>

            </div>

            <div class="form-group">

                <label for="photo">Avatar</label>

                <input type="file" name="photo" id="photo" class="form-control"/>

            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Upload</button>

            </div>

            @include('layout.errors')

        </form>

    </div>

@endsection
