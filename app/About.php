<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{

    protected $fillable = ['family_name',
                           'first_name',
                           'family_name_eng',
                           'first_name_eng',
                           'base',
                           'email',
                           'performance',
                           'image',
                           'twitter',
                           'facebook',
                           'instagram',
                           'message'];

    public function post() {
        return $this->belongsTo('App\Post');
    }

}
