<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAvatar extends Model
{
    protected $guarded = [];

    public function user() {           //establish relationship with user

        return $this->belongsTo('App\User');
        
    }
}
