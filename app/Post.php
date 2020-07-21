<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['post_title', 'post_content'];

    public function posts(){
    	return $this->hasMany('App\Post');
    }
}
