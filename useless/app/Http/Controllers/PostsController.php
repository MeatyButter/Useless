<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Image as Image;
use \Validator as Validator;
use App\Post;
use App\Category;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only([
            'create',
            'store',
            'delete'
        ]);
    }

    /* Setting a pagination of 9 post per scroll */
    public function index()
    {
        //return phpinfo();
    	$posts = Post::latest()->paginate(9);

        $posts->withPath('page/');
    	return view('posts.index', compact('posts'));
    }

    public function getPosts(Request $request)
    {
        // Set up vars
        //$type = $request->vote;
        $json = array(
            'working' => 'working'
        );

        return response()->json($json);
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post') );
    }

    public function category( $category )
    {
        $posts = array();
        $category = \DB::table('categories')->whereSlug($category)
            ->first();
        if ( !count($category)) {
            $category = array();
            return view('errors.404', compact('posts', 'category'));
        }
        $posts = Post::where( 'category_id', $category->id )->get();
        return view('posts.category', compact('posts', 'category'));
    }

    public function create()
    {
        $categories = Category::nested()->get();
    	return view('posts.create', compact('categories'));
    }

    public function store()
    {
    	// Validate that everything havs been submitted
    	$this->validate(request(), [
    		'title'        => 'required',
    		'image'        => 'image|mimes:jpeg,jpg,png,gif|required|max:500000',
            'category'     => 'required'
    	]);

    	// after validation, upload image
        $img = Image::upload( request('image') );
        $category = \DB::table('categories')->whereName(request('category'))
                        ->first();

    	// set the post data
    	$post = [
    		'title' 	   => request('title'),
    		'post_img'	   => '/' . $img['original_filedir'],
            'category_id'  => $category->id
    	];
    	// save post and upload image
    	auth()->user()->publish(
    		new Post($post)
    	);
    	// redirect to the post page
    	return redirect('/');
    }

    public function delete(Post $post)
    {
        // validate that the user is correct
        if( auth()->user()->id !== $post->user_id ):
            return back();
            // return view that says you sneaky batchie
        endif;
        // delete the post
        $post->delete();
        return back();
    }
}

