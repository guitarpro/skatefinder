<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
        public function role(){
        return $this->belongsTo('App\Role');
    }
    //user/member has many businesses
    public function Business(){
        return $this->hasMany('App\Business');
    }
      //user/member has many businesses
    public function businesses(){
        return $this->hasMany('App\Business');
    }
    // made on 4/12 May not be needed many to many relationship
    public function specials(){
        return $this->belongsToMany('App\Special');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
