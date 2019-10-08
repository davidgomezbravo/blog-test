<div class="container">
<p class="card-text">
    <div class="row">
        
        <div class="col-md-12">
            <div class="text-muted">
                <b>User:</b> {{ $user->name }} <br>
                <b>email:</b> {{ $user->email }}<br>
                <b>Created on:</b> {{ $user->created_at }}
        </div>
        <a href="admin/users/{{ $user->id }}">View Posts</a> <br></div>
    </div>
    <div class="row">
        <div class="col-md-12">
                @foreach($user->tags as $tag)
                    <span class="badge badge-success">{{$tag->name}}</span>
                @endforeach
        </div>
    </div>
    
    <div class="row">
        
        <div class="col-md-6"><a href="users/{{ $user->id }}/edit" class="btn btn-primary btn-sm">Edit user</a></div>
        <div class="col-md-6 text-right">
            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger  btn-sm" type="submit">Delete user</button>
            </form>
        </div>
    </div> 
   
</p>
<hr>

	
</div>