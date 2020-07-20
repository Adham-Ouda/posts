<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
 
	public function posts()
    {
    	//die('posts');
        return view('posts');
    }

    public function store(Request $request)
    {
    	    	die('store');
    	$addPost = Post::create($request->all());

    }


}
