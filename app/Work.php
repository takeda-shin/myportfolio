<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
    'title',
    'introduction',
    'language',
    'image',
    'link',
    'github'];

    public function post() {
        return $this->belongsTo('App\Post');
    }
}
