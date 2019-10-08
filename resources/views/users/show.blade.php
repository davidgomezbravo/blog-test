@extends('layouts.app')

@section('content')

<div class="container">
        <div class="jumbotron text-center">
                <h1>Author: {{$name->name}}</h1>
                @guest
                @else
                    <nav>
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="/home">Home</a>
                            </li>
                        </ul>
                    </nav>
                @endguest
            
            </div>
            @if(session()->has('success'))
            <div class="alert alert-success text-center">
                {{ session()->get('success') }}
            </div>
            @endif
            
    <div class="row">     
        @foreach($posts as $post)
            <div class="col-md-6">
            @include('posts.post')
            </div>
        @endforeach
    </div>
</div>


@endsection