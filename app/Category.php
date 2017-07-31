<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nestable\NestableTrait;

class Category extends Model
{

    use NestableTrait;

    protected $fillable = ['parent_id', 'name', 'slug'];
    protected $parent = 'parent_id';
    
    public function posts()
    {
    	return $this->hasMany(Post::class);
    }
}
