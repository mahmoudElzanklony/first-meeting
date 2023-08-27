<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expectations extends Model
{
    protected $table = 'expectations';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'receiver_id','expected_name', 'message_id', 'status'
    ];
    
    public function sender_info() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function receiver_info() {
        return $this->belongsTo(User::class, 'receiver_id');
    }
    public function message_info() {
        return $this->belongsTo(messages::class, 'message_id');
    }
}
