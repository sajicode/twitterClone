<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function comments() {        //showing post and comment relationship

        return $this->hasMany(Comment::class);

    }
    
    public function user() {

        return $this->belongsTo(User::class);
        
    }

    public static function archives() {

        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')

            ->groupBy('year', 'month')

            ->orderByRaw('min(created_at) desc')

            ->get()

            ->toArray();
    }
    
}
