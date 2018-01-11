<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Family;

class ReportController extends Controller
{
    public function index()
    {
        $families = Family::orderBy('name')->paginate(30);
        return view('family.index')->with(compact('families'));
    }
}
