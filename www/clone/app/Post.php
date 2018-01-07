<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['message'];

    public function comments() {        //showing post and comment relationship

        return $this->hasMany(Comment::class);
        
    }      
}
