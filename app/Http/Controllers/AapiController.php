<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
//use App\Aapi;
use App\Family;
use App\PreAapi;
use App\PostAapi;

class AapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $family_id = session('family_id');
        $family = Family::find($family_id);
        return view('aapi.create')->with(compact('family'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $family_id = session('family_id');
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
        return redirect('family/' . $family_id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
