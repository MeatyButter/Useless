<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Validator as Validator;
use Carbon\Carbon;
use \Image as Image;

class UploadController extends Controller
{
	public function index()
	{
		return view('pages.upload');
	}

    public function store()
    {
    	$data = [];

    	//Validate the Title
    	$this->validate(request('title'), [
    		'title' => 'required'
    	]);

    	// get the file upload
    	$file = request(['file'])['file'];

	    // Build the input for validation
	    $fileArray = array('image' => $file);

	    // Tell the validator that this file should be an image
	    $rules = array(
	      'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
	    );

	    // Now pass the input and rules into the validator
	    $img_validator = Validator::make($fileArray, $rules);

	    // Check to see if validation fails or passes
	    if ($img_validator->fails())
	    {
	          // Redirect or return json to frontend with a helpful message to inform the user 
	          // that the provided file was not an adequate type
	          return response()->json(['error' => $validator->errors()->getMessages()], 400);
	    }

        $data['response'] = Image::upload($file);
        return back()->with($data);
    }
}
