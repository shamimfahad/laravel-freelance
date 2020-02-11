<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Workspace extends Model
{
    /*public function project(){
        return $this->belongsTo('App\Project');
    }*/
    protected $dates = ['deadline'];

    public function bid(){
        return $this->belongsTo('App\Bid');
    }

}
