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
                <a href="users/create" class="btn btn-success">New User</a>
            </div>
            <div class="row">
                
                    
                        @foreach($users as $user)
                            <div class="col-md-7">
                            @include('users.user')
                            </div>
                        @endforeach
                    
                
            
            </div>
</div>


@endsection