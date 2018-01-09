@extends('layout.blog-home-master')

@section('content')

    <div class="col-sm-8 blog-main">

        <div class="blog-post">

            @if(count($posts))

                @foreach($posts as $post)

                    <p class="blog-post-meta">{{ $post->user->name }} | {{ $post->created_at->diffForHumans() }}</p>

                    <p><a href="/details/{{$post->id}}">{{ $post->message }}</a></p>

                    <hr>
                    
                @endforeach

            @endif

        </div>

    </div>

@endsection