@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron text-center">
        <h1>Post Test</h1>
        <nav>
            <ul class="nav nav-pills">
                
            </ul>
        </nav>
    </div>
    <div class="row">
        
            <p class="card-text">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12"><img class="img-thumbnail" src="http://lorempixel.com/600/320/technics"></div>
                        <div class="col-md-12 text-right"><b>Posted on:</b> {{ $post->created_at }}</div>
                        <div class="col-md-12">
                            <div class="text-muted"><b>{{ $post->title }}</b> - Created by 
                                <a href="/user/{{ $post->user_id}}">{{ $post->user->name }}</a>
                            </div>
                            {{ $post->content }}<br>
                        </div>
                        <div class="col-md-12">
                                @foreach($post->tags as $tag)
                                    <span class="badge badge-success">{{$tag->name}}</span>
                                @endforeach
                        </div>
                    </div>
                </div>
            
            </p>
    </div>
</div>
@endsection