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
        $data = $request->except('id','status');
        $child = new Child();
        $child->fill($data);
        $child->family_id = $family_id;
        $child->save();
//        if($status == 'new')
//            return redirect('caregiver/create/' . $family_id);

        return redirect(('family/question/' . $family_id));
    }
}
