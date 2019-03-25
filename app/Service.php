<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;

class Service extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
}
