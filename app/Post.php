<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = 'posts';
    
    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function postsInformation() {
        return $this->hasOne('App\PostInformation');
    }

    public function tag() {
        return $this->belongsToMany('App\Tag', 'posts_tags');
    }


}
