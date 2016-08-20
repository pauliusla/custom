<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vardas', 'pavarde', 'salis', 'miestas', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function touchLastLogin()
    {
    $this->login_at = $this->freshTimestamp();

    return $this->save();
    }
    
     public function tasks()
     {
         return $this->hasMany('App\Post');
     }
}
