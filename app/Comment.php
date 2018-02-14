<?php

namespace App;


class Comment extends Model
{

    public function post(){

    	return $this->belongsTo(Post::class);
    }

    public function user()
    {

    	$this->belongsTo(User::class);
    }
}
