<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article_type extends Model
{
    protected $table = 'article_types';
    
    protected $fillable = ['category_id','name'];
    public function articles() {
        return $this->hasMany("App\articles",'id');
    }
}
