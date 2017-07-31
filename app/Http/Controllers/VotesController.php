<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class VotesController extends Controller
{
    public function edit(Post $post, Request $request)
    {
    	// Set up vars
    	$type = $request->vote;
    	$user = auth()->user();
    	$json = array();

    	// Check if the user has voted
    	( $type == 1 )? $user->upVote($post): $user->downVote($post);

    	// get new total
    	$total = $post->countUpVoters() - $post->countDownVoters();
    	// build response
    	$json['total'] =  $total;

    	return response()->json($json);
    }
}
