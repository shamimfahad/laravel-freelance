<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    protected $fillable = ['user_id','service_id'];
    public function service(){
        return $this->belongsTo('App\Service');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
