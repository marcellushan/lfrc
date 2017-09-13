<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Family;
use App\Caregiver;
use Carbon\Carbon;

class CaregiverController extends Controller
{
    public function create($id)
    {
        $current_date = Carbon::now();
        $current_year = $current_date->year;
        $family_id = $id;
        $family = Family::find($family_id);
        return view('caregiver.create')->with(compact('family','current_year'));
    }

    public function store(Request $request)
    {
        $family_id = $request->id;
//        $data = $request->except('id');
        $data = $request->except('id','birth_date');

        $caregiver = new Caregiver();
        $caregiver->fill($data);
        $caregiver->family_id = $family_id;
        $caregiver->birth_date = implode("-", $request->birth_date);
//        dd($data);
        $caregiver->save();
        return redirect(('family/question/' . $family_id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caregiver = Caregiver::find($id);
        $family_id = $_GET['family_id'];
        $family = Family::find($family_id);
//        dd($caregiver);
        $caregiver->year = substr($caregiver->birth_date, 0,4);
        $caregiver->month = substr($caregiver->birth_date, 5,2);
        $caregiver->day = substr($caregiver->birth_date, 8,2);
//        dd($caregiver);
        return view('caregiver.edit')->with(compact('caregiver','family'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $family_id=$request->family_id;
        $caregiver = Caregiver::find($id);
        $data = $request->except('_token');
        $caregiver->fill($data);
//        dd($data);
        $caregiver->save();
        return redirect(('family/' . $family_id));
    }

    public function destroy($id)
    {
        $deleted = Caregiver::destroy($id);

//        dd($_POST['family_id']);
        return redirect ('family/' . $_POST['family_id']);
    }
}
