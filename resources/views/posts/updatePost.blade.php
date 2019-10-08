@extends('layouts.app')

@section('content')

<div class="container">
        <div class="jumbotron text-center">
                <h1>Update Post Test</h1>
                <nav>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Home</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-12">
                    <a href="{{ route('posts.index') }}" class="btn btn-danger">Back All Posts</a><br><br>
            </div>
    <div class="row">
        <div class="col-md-12">
                @if($errors->any())
                <div class="alert alert-danger text-center">
                    Please check yours inputs
                </div>
            @endif
             <div class="col-md-6">
                    <form action="{{ route('posts.update', $posts->id) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Write a Title" value="{{$posts->title}}">
                               
                            </div>
                            <div class="form-group">
                                <label for="postinfo">Write a Post</label>
                                <textarea class="form-control" id="postinfo" name="postinfo" rows="3">{{$posts->content}}</textarea>
                            </div>
                            <div class="form-group bg-light">
                                <label for="tags">Tags (Please type the tags separated by comma eg: people, race,)</label>
                                <input type="text" class="form-control" data-role="tagsinput" name="tags" id="tags">
                                
                            </div>
                            <button type="submit" class="btn btn-primary">Send Post</button>
                        </form>
             </div>
        </div>
       
    </div>
</div>


@endsection
