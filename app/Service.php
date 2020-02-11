<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function categories(){
        return $this->belongsToMany('App\Category');
    }
    public function likes(){
        return $this->hasMany('App\Likes');
    }

}
