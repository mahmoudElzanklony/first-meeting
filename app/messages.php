<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    protected $table = 'messages';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sender_id', 'receiver_id', 'message', 'message_type'
    ];
    
    public function sender_info() {
        return $this->belongsTo(User::class, 'sender_id');
    }
    public function receiver_info() {
        return $this->belongsTo(User::class, 'receiver_id');
    }
    public function message_info() {
        return $this->hasMany(expectations::class);
    }
}
