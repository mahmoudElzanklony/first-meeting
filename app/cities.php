<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cities extends Model
{
     protected $table = 'cities';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_id','name'
    ];
    
    public function country_info() {
        return $this->belongsTo(countries::class, 'country_id');
    }

}
