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
    <div class="row">
		<div class="col-md-2"><a href="admin/posts" class="btn btn-primary">All Posts</a><br><br>
			<a href="admin/posts/create" class="btn btn-success">New Posts</a></div>
		<div class="col-md-2"></div>
		
    </div>
</div>


@endsection
