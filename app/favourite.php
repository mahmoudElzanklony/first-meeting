<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class favourite extends Model
{
    protected $table = 'favourites';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'favourite_id', 
    ];
    
    public function user_info() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function favourite_info() {
        return $this->belongsTo(User::class, 'favourite_id');
    }
}
