@extends('layouts.app') @section('content')
    @include('partials.family_header')
    <div class="well">
        <form action="{{URL::to('/')}}/child/update/{{$child->id}}" method="post">
            <input type="hidden" name="family_id" value="{{$_GET['family_id']}}">
            {{ csrf_field() }}
            <h1 align="center">Edit Child</h1>
            <div class="row">
                <div class="form-group col-md-6 col-md-offset-3">
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{$child->name}}" class="form-control">
                </div>
                </div>
            <div class="row">
                <div class="form-group col-md-6 col-md-offset-3">
                    <label for="name">Date of Birth:</label>
                    <input type="text" name="birth_date" value="{{$child->year}}-{{$child->month}}-{{$child->day}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 col-md-offset-3">
                    <label for="street">Gender</label>
                    <input type="radio" name="gender_id"  @if($child->gender_id == "1") checked @endif value="1">Male
                    <input type="radio" name="gender_id"  @if($child->gender_id == "2") checked @endif value="2">Female
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                    <label>Race</label>
                    <select name="race_id">
                        <option>Select</option>
                        <option value="1" @if($child->race_id == "1") selected @endif >White</option>
                        <option value="2" @if($child->race_id == "2") selected @endif>Black</option>
                        <option value="3" @if($child->race_id == "3") selected @endif>Hispanic</option>
                        <option value="4" @if($child->race_id == "4") selected @endif>Asian American Indian / Alaska Native</option>
                        <option value="5" @if($child->race_id == "5") selected @endif>Native Hawaiian/other Pacific Islander</option>
                        <option value="6" @if($child->race_id == "6") selected @endif>Multiracial</option>
                        <option value="7" @if($child->race_id == "7") selected @endif>Other</option>
                    </select>
                </div>
            </div>

            <br>
            <button type="submit" class="btn-primary btn-lg">submit</button>

        </form>
</div>
    <div class="well">
        <form action="{{URL::to('/')}}/child/{{$child->id}}" method="post">
            <input name="_method" type="hidden" value="DELETE">
            <input name="family_id" type="hidden" value="{{$family->id}}">
            {{ csrf_field() }}
            <h1 align="center">Delete Child</h1>
            <h2>Click button below to permanently delete this child!!</h2>
            <button type="submit">Delete Child</button>
    </div>
        @include('partials.return')
@endsection