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
            <div class="col-md-12">
                    <a href="{{ route('users.index') }}" class="btn btn-danger">Back All Users</a><br><br>
            </div>
    <div class="row">
        <div class="col-md-12">
            

            @if($errors->any())
                <div class="alert alert-danger text-center">
                    
                        Please check yours inputs
                   
                    
                </div>
            @endif
             <div class="col-md-6">
                    <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Write a name">
                               
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Write a email">
                                
                            </div>
                            <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Write a password">
                                    
                                </div>
                            <div class="form-group bg-light">
                                    <label for="tags">Tags</label>
                                    <input type="text" class="form-control" data-role="tagsinput" name="tags" id="tags">
                                   
                                </div>
                            <button type="submit" class="btn btn-primary">Send Post</button>
                        </form>
             </div>
        </div>
       
    </div>
</div>


@endsection
