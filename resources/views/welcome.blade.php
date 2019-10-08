@extends('layouts.app')

@section('content')
    <div class="container">
		<div class="jumbotron text-center">
            <h1>Post Test</h1>
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
        <div class="row">
            <div class="flex-center position-ref full-height">
                
                <div class="row">
                    @forelse($posts as $post)
                        <div class="col-6">
                            @include('posts.post2')
                        </div>
                    @empty
                        <p>No hay mensajes destacados.</p>
                    @endforelse
                
                    @if(count($posts))
                    <div class="mt-2 mx-auto"> 
                        {{ $posts->links('pagination::bootstrap-4') }}
                    </div>
                    @endif
                </div>
                
            </div>
        </div>
    </div>
@endsection