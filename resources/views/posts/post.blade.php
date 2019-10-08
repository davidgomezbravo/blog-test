<img class="img-thumbnail" src="http://lorempixel.com/600/320/technics">
<p class="card-text">
    <div class="row">
        <div class="col-md-12 text-right"><b>Posted on:</b> {{ $post->created_at }}</div>
        <div class="col-md-12"><div class="text-muted"><b>{{ $post->title }}</b> - Created by <a href="{{ route('users.show', $post->user_id) }}">{{ $post->user->name }}</a>
        </div>
        {{ $post->content }}<br>
        <a href="{{ route('posts.show', $post->id) }}">Read More</a> <br></div>
    </div>
    <div class="row">
        <div class="col-md-12">
                @foreach($post->tags as $tag)
                    <span class="badge badge-success">{{$tag->name}}</span>
                @endforeach
        </div>
    </div>
    @if($my_id == $post->user_id) 
    <div class="row">
        
        <div class="col-md-6"><a href="posts/{{ $post->id }}/edit" class="btn btn-primary btn-sm">Edit Post</a></div>
        <div class="col-md-6 text-right">
            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger  btn-sm" type="submit">Delete Post</button>
            </form>
        </div>
    </div> 
        
        
    @endif
</p>
<hr>
<div class="card-text text-muted float-right">
	
</div>