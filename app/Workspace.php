<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    public function bid(){
        return $this->belongsTo('App\Bid');
    }
    public function project(){
        return $this->belongsTo('App\Project');
    }
}
