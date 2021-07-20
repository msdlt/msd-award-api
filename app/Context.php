<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Context extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function certificate()
    {
        return $this->belongsTo('App\Certificate');
    }
}
