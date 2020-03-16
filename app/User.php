<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

       protected $fillable = [
        'name', 'email', 'password','profession_id'
    ];

    
    protected $hidden = [
        'password', 'remember_token', 'created_at', 'uptated_at'
        
    ];

        
    public function users()
    {
	return $this->belongsTo('App\Profession', 'user_id');
    }
    
   
}