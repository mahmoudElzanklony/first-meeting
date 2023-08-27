<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //2020_08_01_004423_create_cities_table
    use Notifiable;
    
    protected $table = 'users';
    
    protected $fillable = [
        'username', 'email', 'password', 'gender' , 'city_id' , 'phone' , 'activation_phone' ,
        'activation_phone_status',
        'image' , 'no_points' , 'no_mobile_messages',
        'short_note' , 'key' , 'active' , 'block' , 'type'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function sender_info() {
        return $this->hasMany(messages::class);
    }
    public function receiver_info() {
        return $this->hasMany(messages::class);
    }
    
    public function user_info() {
        return $this->hasMany(favourite::class);
    }
    public function favourite_info() {
        return $this->hasMany(favourite::class);
    }
    
}
