<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $table = 'tags';

    public function post() {
        return $this->belongsToMany('App\Post', 'posts_tags');
    } 
}
