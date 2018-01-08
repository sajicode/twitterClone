@extends('layout.blog-home-master')

@section('content')

    <h1>Post Details</h1>

    <p class="blog-post-meta">Author on {{ $post->created_at->format('d-m-Y') }}</p>
    <p>{{ $post->message }}</p>

    <hr>

    <div class="comments">

        <ul class="list-group">

            @foreach($post->comments as $comment)

                <li class="list-group-item">

                    <strong>

                        {{ $comment->created_at->diffForHumans() }}: &nbsp;

                    </strong>

                    {{ $comment->body }}
                    
                </li>

            @endforeach

        </ul>

    </div>

    <hr>

    <div class="card">

        <div class="card-block">


            <form method="POST" action="/posts/{{ $post->id }}/comments">

                {{ csrf_field() }}

                <div class="form-group">

                    <textarea name="body" placeholder="Add your comments here." class="form-control"></textarea>

                </div>

                <div class="form-group">

                    <button type="submit" class="btn btn-primary">Add Comment</button>
                    
                </div>

            </form>

        </div>

    </div>

@endsection