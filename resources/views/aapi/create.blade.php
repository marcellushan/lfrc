@extends('layouts.app') @section('content')
    @include('partials.family_header')
    <div class="well">
        <h1>AAPI</h1>
        <h3>Pretest and posttest scores (numeric score, 1-10 - 1 is high risk and 10 is low risk)</h3>
    </div>
    <div class="well">
        <div class="row">
            @if(! $family->aapi_pre)
            @include('partials.aapi_select', ['cycle' => 'Pre Test', 'cycle_id' => '1'])
            @else
                <h3>Pre-Test Data received</h3>
            @endif
            @if(! $family->aapi_post)
            @include('partials.aapi_select', ['cycle' => 'Post Test', 'cycle_id' => '2'])
                @else
                    <h3>Post-Test Data received</h3>
                @endif
        </div>
        </div>
    @include('partials.return')
@endsection