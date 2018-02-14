<?php

namespace App;


class Post extends Model
{
    public function comment(){

    	return $this->hasMany(Comment::class);
    }

    
    public function user()
    {

        return $this->belongsTo(User::class);
    }

     public function addComment($body)
    {

        $this->comment()->create(compact('body'));

    }
}
