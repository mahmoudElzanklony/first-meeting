<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class countries extends Model
{
    protected $table = 'countries';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','prefix_number','mobile_message_status'
    ];
    public function country_info() {
        return $this->hasMany(cities::class);
    }
}
