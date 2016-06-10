<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Resolve o problema do MassAssignment
    protected $fillable = array(
        'title',
        'content'
    );
    
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'post_tags');
    }
}
