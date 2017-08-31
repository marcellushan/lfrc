@extends('layouts.app') @section('content')
    @include('partials.family_header')
    <div class="well">

        <h2><a href="{{URL::to('/')}}/child/create/{{$family->id}}">Add a Child</a></h2>
        <h2><a href="{{URL::to('/')}}/caregiver/create/{{$family->id}}">Add a Caregiver</a></h2>
        <h2><a href="{{URL::to('/')}}/aapi/create/{{$family->id}}">Add AAPI scores</a></h2>
        <h2><a href="{{URL::to('/')}}/ncfas/{{$family->id}}">Add NCFAS Scores</a></h2>
        <h2><a href="{{URL::to('/')}}/family/{{$family->id}}">Go to Family Homepage</a></h2>
        <h2><a href="{{URL::to('/')}}">Go to FRC Homepage</a></h2>
@endsection