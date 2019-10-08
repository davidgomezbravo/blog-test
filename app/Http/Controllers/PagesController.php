<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
        $posts = Post::latest()->paginate(10);

	    return view('welcome', [
            'posts' => $posts,
            'my_id' => 0,
        ]);
    }

    public function home()
    {
        $posts = Post::latest()->paginate(10);

	    return view('home', [
	    	'posts' => $posts,
        ]);
    }

    public function author($id){
        $name = User::select('name')->find($id);
        $posts = Post::where('user_id',$id)->get();

        return view('pages.userPost', [
            'posts' => $posts,
            'name' => $name,
            'my_id' => 0,
        ]);
    }

    public function show($id){
        $post = Post::find($id);

        return view('pages.showPost', [
            'post' => $post,
        ]);
    }
}
