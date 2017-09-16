<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ReferralType;

class Referral extends Model
{
    public function referral_type()
    {
        return $this->belongsTo('App\ReferralType');
    }
}
