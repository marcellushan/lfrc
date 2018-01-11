<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Family;

class ReportController extends Controller
{
    public function index()
    {
        $families = Family::where('created_at', '>','2017-10-01')->where('created_at', '<','2017-11-01')->get();
        dd($families);
        return view('family.index')->with(compact('families'));
    }
}
