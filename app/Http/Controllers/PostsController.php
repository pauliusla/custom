<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Post;
use Auth;
use Session;

class PostsController extends Controller
{
     public function __construct()
     {
        $this->middleware('auth');
     }
     
     public function index()
     {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index')->withPosts($posts);
     }
     
     public function create()
     {
        return view('posts.create');
     }
     
     public function store(Request $request)
     {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required'
        ));
        
        $post = new Post;
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->body = $request->body;
        
        $post->save();
        
        Session::flash('success', 'The post was saved!');
        
        return redirect()->route('posts.show', $post->id);
     }
     
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }
    
    public function edit($id)
    {
        $post = Post::find($id);
        if (Auth::user()->id == $post->id)
        {
        return view('posts.edit')->withPost($post);
        }
        else
        return view('posts.index')->withPost($post);
    }
    
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if (Auth::user()->id == $post->id)
        {
        if($request->input('slug') == $post->slug){
           $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required'
        )); 
        }
        else {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required'
        ));
        }
        $post = Post::find($id);
        
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        
        Session::flash('success', 'The post was saved!');
        
        return Redirect()->route('posts.show', $post->id);
        }
        else
        {
            return view('posts.show')->withPost($post); 
        }
    }
     
     public function destroy($id)
     {
        $post = Post::find($id);
        if (Auth::user()->id == $post->id)
        {
        
        $post->delete();
        
        Session::flash('success', 'Post deleted!');
        
        return redirect()->route('posts.index');
        }
        else
        {
            return view('posts.show')->withPost($post); 
        }
     }
}
