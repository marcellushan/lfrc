<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $fillable = ['case_id', 'name','street','city','state','zip','income_range_id','create_date','referral_id','ina_date','close_date'];

    public function incomeSources()
    {
        return $this->belongsToMany('App\IncomeSource');
    }

    public function incomeRange()
    {
        return $this->belongsTo('App\IncomeRange');
    }

    public function caregivers()
    {
        return $this->hasMany('App\Caregiver');
    }

    public function children()
    {
        return $this->hasMany('App\Child');
    }

    public function referral()
    {
        return $this->belongsTo('App\Referral');
    }

    public function abuses()
    {
        return $this->belongsToMany('App\Abuse');
    }

    public function ncfasStatuses()
    {
        return $this->hasMany('App\NcfasStatus');
    }
}
