@extends('layouts.app') @section('content')
{{--<form action="{{URL::to('/')}}/aapi" method="post">--}}
    {{--<input type="hidden" name='category' value="{{$category->id}}">--}}
    {{--<input type="hidden" name='phase' value="{{$phase->id}}">--}}
{{ csrf_field() }}
    <div class="well">
        <h1>AAPI</h1>
        <h3>Pretest and posttest scores (numeric score, 1-10 - 1 is high risk and 10 is low risk)</h3>
    </div>
    <div class="well">
        <div class="row">
            @include('partials.aapi_select', ['cycle' => 'Pre Test', 'cycle_id' => '1'])
            @include('partials.aapi_select', ['cycle' => 'Post Test', 'cycle_id' => '2'])
    </div>
@endsection