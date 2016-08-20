<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Post;
use Session;

class PagesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function getIndex(){
        return view('pages.welcome');
    }
    
    public function getUserp(){
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('pages.index')->withPosts($posts);
    }
}
