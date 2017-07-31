<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
    	$this->validate(request(), [
    		'body' => 'required'
    	]);
    	auth()->user()->publishComment(
    		new Comment([
    			'post_id' 	=> $post->id,
    			'body'		=> request('body')
    		])
    	);

    	return back();
    }
}
