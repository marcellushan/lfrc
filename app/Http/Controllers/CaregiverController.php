<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Family;
use App\Caregiver;

class CaregiverController extends Controller
{
    public function create($id)
    {
        $family_id = $id;
        $family = Family::find($family_id);
        return view('caregiver.create')->with(compact('family'));
    }

    public function store(Request $request)
    {
        $family_id = $request->id;
        $data = $request->except('id');
        $caregiver = new Caregiver();
        $caregiver->fill($data);
        $caregiver->family_id = $family_id;
//        dd($caregiver);
        $caregiver->save();
        return redirect(('family/question/' . $family_id));
    }
}
