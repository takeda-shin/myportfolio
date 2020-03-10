<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'body'];

    public function abouts() {
        return $this->hasMany('App\About');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
