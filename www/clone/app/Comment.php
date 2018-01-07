<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body', 'post_id'];

    public function post() {        //showing relationship with post

        return $this->belongsTo(Post::class);

    }


}
