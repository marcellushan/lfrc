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
        $firstDayofMonth = Carbon::now()->startOfMonth()->toDateString();
        $lastDayofMonth = Carbon::now()->endOfMonth()->toDateString();
        $created_total = Family::count();
        $open_total = Family::whereNull('closed')->count();
        $closed_total = Family::where('closed','=', true)->count();
        $created_this_year = Family::where('created_at', '>', $current_year . '-01-01')->where('created_at', '<', $current_year . '-12-31')->count();
        $open_this_year = Family::whereNull('closed')->where('created_at', '>', $current_year . '-01-01')->where('created_at', '<', $current_year . '-12-31')->count();
        $closed_this_year = Family::where('closed','=', true)->where('created_at', '>', $current_year . '-01-01')->where('created_at', '<', $current_year . '-12-31')->count();
        $created_this_month = Family::where('created_at', '>', $firstDayofMonth)->where('created_at', '<', $lastDayofMonth)->count();
        $open_this_month = Family::whereNull('closed')->where('created_at', '>', $firstDayofMonth)->where('created_at', '<', $lastDayofMonth)->count();
        $closed_this_month = Family::where('closed','=', true)->where('created_at', '>', $firstDayofMonth)->where('created_at', '<', $lastDayofMonth)->count();


//        dd($lastDayofPreviousMonth);
        return view('report.summary')->with(compact('created_total','open_total','closed_total','created_this_year','open_this_year','closed_this_year','created_this_month','open_this_month','closed_this_month'));
    }

    public function show(Request $request)
    {
        $start_date = implode("-", $request->start_date);
        $end_date = implode("-", $request->end_date);
        $families = Family::where('created_at', '>', $start_date)->where('created_at', '<', $end_date)->count();

        dd($families);

    }
}
