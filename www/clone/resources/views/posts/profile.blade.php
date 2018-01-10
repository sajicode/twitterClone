@extends('layout.blog-home-master')

@section('content')


    <p class="blog-post-meta"><img src="{{ $user->userAvatar->filename }}" width="50px" height="50px"/> | {{ $user->name }} </p>

    <hr/>

    <p class="blog-post">Bio: {{ $user->userAvatar->bio }}</p>

    @if(count($posts))

        @foreach($posts as $post)

            <p>{{ $post->created_at->diffForHumans() }}</p>

            <p><a href="/details/{{$post->id}}">{{ $post->message }}</a></p>

            <hr>
            
        @endforeach

    @endif


@endsection