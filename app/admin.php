<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class admin extends Authenticatable
{
    //2020_08_01_004423_create_cities_table
    use Notifiable;
    protected $table = 'users';
    
    protected $guard = 'admin';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'gender' , 'city_id' , 'phone' , 'image' , 'no_points' , 'no_mobile_messages',
        'short_note' , 'key' , 'active' , 'block' , 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
