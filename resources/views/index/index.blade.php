@extends('layouts.template')
@section('title', 'Index')

@section('content')
<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        
        @foreach($posts as $post)
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">{{ $post->title }}</h2>
                    <h3 class="post-subtitle">{{ $post->content }}</h3>
                </a>
                <p class="post-meta">Postado por <a href="#">##</a>
                    {{ date('F d, Y', strtotime($post->created_at)) }} 
                    &nbsp;
                    @foreach($post->tags as $tag)
                        <span class="label label-success">{{ $tag->name }}</span>
                    @endforeach
                </p>
            </div>
            @foreach($post->comments as $comment)
                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{ $comment->name }} 
                            <small>{{ date('F d, Y', strtotime($comment->created_at)) }}</small>
                        </h4>
                        {{ $comment->comment }}
                    </div>
                </div>
            @endforeach
        
        <hr>
        @endforeach

        <!-- Pager -->
        <ul class="pager">
            <li class="next">
                <a href="#">Older Posts &rarr;</a>
            </li>
        </ul>
    </div>
</div>
@endsection



