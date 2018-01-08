<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function post() {        //showing relationship with post

        return $this->belongsTo(Post::class);

    }

    public function user() {

        return $this->belongsTo(User::class);
        
    }


}
