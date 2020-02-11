<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\App;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','user_type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function projects(){
        return $this->hasMany('App\Project');
    }
    public function services(){
        return $this->hasMany('App\Service');
    }
    public function bid(){
        return $this->hasMany('App\Bid');
    }
    public function ratings()
    {
        return $this->hasMany(Ratings::class);
    }
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    public function likes()
    {
        return $this->hasMany('App\Likes');
    }

}
