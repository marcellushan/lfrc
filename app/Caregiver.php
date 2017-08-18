<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caregiver extends Model
{
    protected $fillable = ['name','birth_date','gender','marital_status','race','education','family_role','family_id'];

}
