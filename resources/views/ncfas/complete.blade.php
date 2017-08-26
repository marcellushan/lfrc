@extends('layouts.app') @section('content')
@include('partials.family_header')
{{--<form action="{{URL::to('/')}}/ncfas" method="post">--}}
    {{--<input type="hidden" name='category_id' value="{{$category->id}}">--}}
    {{--<input type="hidden" name='phase_id' value="{{$phase->id}}">--}}
{{--{{ csrf_field() }}--}}
    <div class="well">
        <h1> Environment</h1>
        @include('partials.environment')
        <h1> Parental Capabilities</h1>
        @include('partials.parental_capabilities')
        <h1> Family Interactions</h1>
        @include('partials.family_interactions')
        <h1> Family Safety</h1>
        @include('partials.family_safety')
        <h1>Child Well Being</h1>
        @include('partials.family_safety')
        <h1> Family Safety</h1>
        @include('partials.family_safety')
        <h1> Family Safety</h1>
        @include('partials.family_safety')
        <h1> Family Safety</h1>
        @include('partials.family_safety')
</div>
@endsection