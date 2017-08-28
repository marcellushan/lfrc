<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Family;
use App\Child;

class ChildController extends Controller
{
    public function create($id)
    {
        $family_id = $id;
        $family = Family::find($family_id);
        return view('child.create')->with(compact('family'));
    }

    public function store(Request $request)
    {
        $family_id = $request->id;
        $status = $request->status;
        $data = $request->except('id','status','birth_date');
        $child = new Child();
        $child->fill($data);
        $child->family_id = $family_id;
        $child->birth_date = implode("-", $request->birth_date);

        $child->save();
//        if($status == 'new')
//            return redirect('caregiver/create/' . $family_id);

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
        $child = Child::find($id);
        $family_id = $_GET['family_id'];
        $family = Family::find($family_id);
//        dd($child);
        $child->year = substr($child->birth_date, 0,4);
        $child->month = substr($child->birth_date, 5,2);
        $child->day = substr($child->birth_date, 8,2);
//        dd($caregiver);
        return view('child.edit')->with(compact('child','family'));
    }

    public function update(Request $request, $id)
    {
        $family_id=$request->family_id;
        $child = Child::find($id);
        $data = $request->except('_token');
        $child->fill($data);
//        dd($request);
        $child->save();
        return redirect(('family/' . $family_id));
    }
}
