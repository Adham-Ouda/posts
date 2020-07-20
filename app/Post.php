<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public $table="posts";
     protected $fillable = [
        'title', 'description','photo','like'
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function hashtags()
    {
        return $this->hasMany('App\Hashtag');
    }
}
