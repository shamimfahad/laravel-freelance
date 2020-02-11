<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function categories(){
        return $this->belongsToMany('App\Category');
    }
    public function bids(){
        return $this->hasMany('App\Bid');
    }
    /*public function workspaces(){
        return $this->hasOne('App\Workspace');
    }*/
}
