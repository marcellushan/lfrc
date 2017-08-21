<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    public function ncfasStatuses()
    {
        return $this->hasMany('App\NcfasStatus');
    }
}
