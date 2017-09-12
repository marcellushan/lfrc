<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    public function families()
    {
        return $this->belongsToMany('App\Family');
    }
}
