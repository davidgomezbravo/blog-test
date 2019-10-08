<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->orderBy('created_at', 'DESC')->paginate(10);
        
	    return view('posts.index', [
            'posts' => $posts,
            'my_id' => (Auth::user()->id),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.newPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tags = explode(',', $request->tags);

        $request->validate([
            'title' => 'required',
            'postinfo' => 'required',
        ]);
  
        $post = Post::create([
            'user_id' => (Auth::user()->id),
            'title' => $request->title,
            'content' => $request->postinfo,    
        ]);

        $post->tag($tags);

        return redirect()->route('posts.index')
        ->with('success','The Post has been successfully Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', [
            'post' => $post,
            
            'my_id' => 0,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('posts.updatePost', [
            'posts' => $posts,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tags = explode(',', $request->tags);
        
        $request->validate([
            'title' => 'required',
            'postinfo' => 'required',
        ]);

        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->postinfo;
        //$post->tag(['php', 'laravel']);
        $post->save();

        $post->tag($tags);

        return redirect()->route('posts.index')
        ->with('success','The Post has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('posts.index')
        ->with('success','The Post has been successfully Deleted');
    }
}
