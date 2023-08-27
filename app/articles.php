<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    protected $table = 'articles';
    
    protected $fillable = ['article_type_id','name','description','image','tags','content','seen'];
    
    public function article_type() {
        return $this->belongsTo(article_type::class,'article_type_id');
    }
}
