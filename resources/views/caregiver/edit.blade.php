@extends('layouts.app') @section('content')
    @include('partials.family_header')
    <div class="well">
        <form action="{{URL::to('/')}}/caregiver/update/{{$caregiver->id}}" method="post">
            <input type="hidden" name="family_id" value="{{$_GET['family_id']}}">

            {{ csrf_field() }}
            <h1>Edit Caregiver</h1>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{$caregiver->name}}" class="form-control">
                </div>
                </div>
                <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Date of Birth:</label>
                    <input type="text" name="birth_date" value="{{$caregiver->year}}-{{$caregiver->month}}-{{$caregiver->day}}">
                    {{--<input type="text" value="{{$family->year}}-{{$family->month}}-{{$family->day}}">--}}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="street">Gender</label>
                    <input type="radio" name="gender_id" value="1" @if($caregiver->gender_id == "1") checked @endif >Male
                    <input type="radio" name="gender_id" value="2" @if($caregiver->gender_id == "2") checked @endif >Female
                </div>
                <div class="col-md-4">
                    <label>Marital Status</label>
                    <select name="marital_status_id">
                        <option>Select</option>
                        <option value="1" @if($caregiver->marital_status_id == "1") selected @endif >Single</option>
                        <option value="2" @if($caregiver->marital_status_id == "2") selected @endif >Married</option>
                        <option value="3" @if($caregiver->marital_status_id == "3") selected @endif >Divorced</option>
                        <option value="4" @if($caregiver->marital_status_id == "4") selected @endif >Separated</option>
                        <option value="5" @if($caregiver->marital_status_id == "5") selected @endif >Widow</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label>Race</label>
                    {{--@include('partials.race_select')--}}
                    <select name="race_id">
                        <option>Select</option>
                        <option value="1" @if($caregiver->race_id == "1") selected @endif >White</option>
                        <option value="2" @if($caregiver->race_id == "2") selected @endif>Black</option>
                        <option value="3" @if($caregiver->race_id == "3") selected @endif>Hispanic</option>
                        <option value="4" @if($caregiver->race_id == "4") selected @endif>Asian American Indian / Alaska Native</option>
                        <option value="5" @if($caregiver->race_id == "5") selected @endif>Native Hawaiian/other Pacific Islander</option>
                        <option value="6" @if($caregiver->race_id == "6") selected @endif>Multiracial</option>
                        <option value="7" @if($caregiver->race_id == "7") selected @endif>Other</option>
                    </select>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label>Education</label>
                    <select name="education_id">
                        <option>Select</option>
                        <option value="1" @if($caregiver->education_id == "1") selected @endif >Less than High School</option>
                        <option value="2" @if($caregiver->education_id == "2") selected @endif >High School Graduate</option>
                        <option value="3" @if($caregiver->education_id == "3") selected @endif >GED</option>
                        <option value="4" @if($caregiver->education_id == "4") selected @endif >Vocational</option>
                        <option value="5" @if($caregiver->education_id == "5") selected @endif >Some College</option>
                        <option value="6" @if($caregiver->education_id == "6") selected @endif >College Graduate</option>
                        <option value="7" @if($caregiver->education_id == "7") selected @endif >Other</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label>Family Role</label>
                    <select name="family_role_id">
                        <option>Select</option>
                        <option value="1" @if($caregiver->family_role_id == "1") selected @endif >Biological Parent</option>
                        <option value="2" @if($caregiver->family_role_id == "2") selected @endif>GrandParent</option>
                        <option value="3" @if($caregiver->family_role_id == "3") selected @endif>Step-Parent</option>
                        <option value="4" @if($caregiver->family_role_id == "4") selected @endif>Live-in</option>
                        <option value="5" @if($caregiver->family_role_id == "5") selected @endif>Foster Parent</option>
                        <option value="6" @if($caregiver->family_role_id == "6") selected @endif>Adoptive Parent</option>
                        <option value="7" @if($caregiver->family_role_id == "7") selected @endif>Other</option>
                    </select>
                </div>
            </div>
            <br>
            <button type="submit" class="btn-primary btn-lg">submit</button>

        </form>
        </div>
    <div class="well">
        <form action="{{URL::to('/')}}/caregiver/{{$caregiver->id}}" method="post">
            <input name="_method" type="hidden" value="DELETE">
            <input name="family_id" type="hidden" value="{{$family->id}}">
            {{ csrf_field() }}
            <h1 align="center">Delete Caregiver</h1>
            <h2>Click button below to permanently delete this caregiver!!</h2>
            <button type="submit">Delete Caregiver</button>
    </div>
    @include('partials.return')
@endsection