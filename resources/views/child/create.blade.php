@extends('layouts.app') @section('content')
    @include('partials.family_header')
    <div class="well">
        <form action="{{URL::to('/')}}/child" method="post">
            <input type="hidden" name="id" value="{{$family->id}}">
            {{ csrf_field() }}
            <h1 align="center">Add Child</h1>
            <div class="row">
                <div class="form-group col-md-6 col-md-offset-3">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                </div>
            <div class="row">
                <div class="form-group col-md-6 col-md-offset-3">
                    <label for="name">Date of Birth:</label>
                    @include('partials.date_needed', ['name' => 'birth_date'])
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 col-md-offset-3">
                    <label for="street">Gender</label>
                    <input type="radio" name="gender_id" value="1">Male
                    <input type="radio" name="gender_id" value="2">Female
                </div>
                <div class="col-md-4">
                    <label>Race</label>
                    @include('partials.race_select')
                </div>
            </div>

            <br>
            <button type="submit">submit</button>

        </form>
</div>
        @include('partials.return')
@endsection