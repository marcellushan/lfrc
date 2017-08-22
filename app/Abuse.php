<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abuse extends Model
{
    public function families()
    {
        return $this->belongsToMany('App\Family');
    }






}
