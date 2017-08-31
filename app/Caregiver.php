<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caregiver extends Model
{
    protected $fillable = ['name','birth_date','gender_id','marital_status_id','race_id','education_id',
        'family_role_id','family_id','education_other','family_role_other'];

    public function gender()
    {
        return $this->belongsTo('App\Gender');
    }
    public function maritalStatus()
    {
        return $this->belongsTo('App\MaritalStatus');
    }

    public function race()
    {
        return $this->belongsTo('App\Race');
    }

    public function education()
    {
        return $this->belongsTo('App\Education');
    }

    public function familyRole()
    {
        return $this->belongsTo('App\FamilyRole');
    }
}
