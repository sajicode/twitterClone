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
    
}
