@extends('layouts.app') @section('content')
@include('partials.family_header')
<div class="well">

<h3>Intake</h3>
        <div class="row">
            @foreach($intakes as $intake)
                    <h4 class="col-md-3">
                        @if($intake->not_complete) <a href="{{URL::to('/')}}/ncfas/create/{{$family->id}}/{{$intake->id}}/1"> {{$intake->name}}</a>@else  {{$intake->name}} @endif
                    </h4>

                @endforeach
        </div>

        <h3>Interim</h3>
        <div class="row">
            @foreach($interims as $interim)
                <h4 class="col-md-3">
                    @if($interim->not_complete) <a href="{{URL::to('/')}}/ncfas/create?id={{$family->id}}&category_id={{$interim->id}}&phase_id=2"> {{$interim->name}}</a>@else  {{$interim->name}} @endif
                </h4>

            @endforeach
        </div>

        <h3>Closure</h3>
        <div class="row">
            @foreach($closures as $closure)
                <h4 class="col-md-3">
                    @if($closure->not_complete) <a href="{{URL::to('/')}}/ncfas/create?id={{$family->id}}&category_id={{$closure->id}}&phase_id=3"> {{$closure->name}}</a>@else  {{$closure->name}} @endif
                </h4>

            @endforeach
        </div>
</div>
@include('partials.return')
@endsection