<?php

namespace App;
use Carbon\Carbon;

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

    public function scopeFilter($query, $filters)
    {
        if($month =$filters['month']){
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if($year = $filters['year']){
            $query->whereYear('created_at', $year);
        }
    }
}
