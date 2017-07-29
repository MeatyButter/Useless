<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jcc\LaravelVote\CanBeVoted;

class Post extends Model
{
    use CanBeVoted;
    protected $fillable = ['user_id', 'category_id', 'title', 'post_img'];
    protected $vote = User::class;

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function sidebar()
    {
        $posts = Post::latest()
                ->take(8)
                ->get();

        foreach ($posts as $index => $post):
            $posts[$index]->category = $post->category;
            $posts[$index]->points = $post->countUpVoters() - $post->countDownVoters();
        endforeach;

        return $posts->toArray();
        /*return static::selectRaw('year(created_at) year, monthName(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();*/
    }
}
