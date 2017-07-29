<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comments;
use \Image as Image;


class UserController extends Controller
{
    public function show(User $user)
    {
    	return view('user.show', compact('user'));
    }

    public function edit(User $user)
    {
    	// validate that the user is correct
        if( auth()->user()->id !== $user->id ):
            return back();
            // return view that says you sneaky batchie
        endif;

    	//validate the image
    	$this->validate(request(), [
    		'image' => 'mimes:jpeg,jpg,png,gif|required|max:100000'
    	]);

    	// after validation, upload image
        $img = Image::upload(request('image'), 'hash');

        // Save the new directory
    	$user->img_profile = '/' . $img['original_filedir'];
    	$user->save();

    	return back();
    }
}
