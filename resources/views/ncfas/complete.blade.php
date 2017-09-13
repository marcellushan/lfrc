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
        @include('partials.child_well_being')
        <h1> Social/Community Life</h1>
        @include('partials.social_community_life')
        <h1> Self-Suffiency</h1>
        @include('partials.self_suffiency')
        <h1>Family Health</h1>
        @include('partials.family_health')
</div>
@include('partials.return')
@endsection