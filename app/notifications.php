<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notifications extends Model
{
    protected $table = 'notifications';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sender_id', 'receiver_id', 'text', 'status'
    ];
    
    public function sender_info() {
        return $this->belongsTo(User::class, 'sender_id');
    }
    public function receiver_info() {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}
