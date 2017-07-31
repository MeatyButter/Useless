<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Image as Image;
use \Validator as Validator;

class Upload extends Model
{
    function post()
    {
    	return $this->belongsTo(Post::class);
    }
}
