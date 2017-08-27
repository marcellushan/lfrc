<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Family;
use App\Aapi;
use App\PreAapi;
use App\PostAapi;

class AapiController extends Controller
{
    public function create($id)
    {
        $family_id = $id;
        $family = Family::find($family_id);
        return view('aapi.create')->with(compact('family'));
    }

    public function store(Request $request)
    {
        $family_id = $request->id;
        $family = Family::find($family_id);
        $data = $request->except('_token','cycle_id');
//        dd($family);
        if($request['cycle_id'] == '1'){
            $aapi = new PreAapi();
            $aapi->fill($data);
            $aapi->family_id = $family_id;
            $aapi->save();
            $family->aapi_pre = '1';
        }
        if($request['cycle_id'] == '2'){
            $aapi = new PostAapi();
            $aapi->fill($data);
            $aapi->family_id = $family_id;
            $aapi->save();
            $family->aapi_post = '1';
        }
//        ($data['cycle_id']=='1' ? $family->aapi_pre = '1' : $family->aapi_post = '1');
        $family->save();
//        dd($family);
        return redirect('family/question/' . $family_id);

    }
}
