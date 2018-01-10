@extends('layout.blog-home-master')

@section('content')

    <div class="col-sm-8 blog-main">

        <div class="blog-post">

            @if(count($posts))

                @foreach($posts as $post)

                    <img src="{{ $post->user->userAvatar->filename }}" width="50px" height="50px"/>

                    <a href="/profile/{{ $post->user->id }}"><p class="blog-post-meta">{{ $post->user->name }} </p></a><p> | {{ $post->created_at->diffForHumans() }}</p>

                    <p><a href="/details/{{$post->id}}">{{ $post->message }}</a></p>

                    <hr>
                    
                @endforeach

            @endif

        </div>

    </div>

@endsection