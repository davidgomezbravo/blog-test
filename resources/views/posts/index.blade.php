@extends('layouts.app')

@section('content')

<div class="container">
        <div class="jumbotron text-center">
            <h1>Post Test</h1>
            <nav>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                </ul>
            </nav>
        </div>
        @if(session()->has('success'))
            <div class="alert alert-success text-center">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="col-md-12">
            <a href="posts/create" class="btn btn-success">New Posts</a>
        </div>
    <div class="row">
        
             
                @foreach($posts as $post)
                    <div class="col-md-6">
                    @include('posts.post')
                    </div>
                @endforeach
             
        
       
    </div>
</div>


@endsection