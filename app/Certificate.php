<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function contexts()
    {
        return $this->hasMany('App\Context');
    }
}
