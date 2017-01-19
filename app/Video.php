<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    protected $fillable = ['id', 'title', 'url',];

}
