<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Family;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index()
    {
        $current_date = Carbon::now();
        $current_year = $current_date->year;
        $families = Family::where('created_at', '>', '2017-01-01')->where('created_at', '<', '2017-01-31')->count();
//        dd($families);
        return view('report.summary')->with(compact('families','current_date','current_year'));
    }

    public function show(Request $request)
    {
        $start_date = implode("-", $request->start_date);
        $end_date = implode("-", $request->end_date);
        $families = Family::where('created_at', '>', $start_date)->where('created_at', '<', $end_date)->count();

        dd($families);

    }
}
