@extends('layouts.app') @section('content')
    @include('partials.family_header')
    <div class="well">
        <form action="{{URL::to('/')}}/caregiver" id="new_caregiver" method="post">
            <input type="hidden" name="id" value="{{$family->id}}">

            {{ csrf_field() }}
            <h1>Add Caregiver</h1>
            <div class="row">
                <div class="form-group col-md-7 col-md-offset-2">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="row">
                    <div class="form-group col-md-4 col-md-offset-2">
                        <label for="name">Date of Birth:</label>
                        @include('partials.date_needed', ['name' => 'birth_date'])
                    </div>
                    <div class="form-group col-md-3">
                        <label for="street">Gender</label>
                        <input type="radio" name="gender_id" value="1">Male
                        <input type="radio" name="gender_id" value="2">Female
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 col-md-offset-2">
                        <label>Marital Status</label>
                        <select name="marital_status_id">
                            <option>Select</option>
                            <option value="1">Single</option>
                            <option value="2">Married</option>
                            <option value="3">Divorced</option>
                            <option value="4">Separated</option>
                            <option value="5">Widow</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Race</label>
                        @include('partials.race_select')
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 col-md-offset-2">
                        <label>Education</label>
                        <select name="education_id" id="education">
                            <option>Select</option>
                            <option value="1">Less than High School</option>
                            <option value="2">High School Graduate</option>
                            <option value="3">GED</option>
                            <option value="4">Vocational</option>
                            <option value="5">Some College</option>
                            <option value="6">College Graduate</option>
                            <option value="7">Other</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4" id="education_other">
                        <label>Other Education</label>
                        <input type="text" name="education_other">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 col-md-offset-2">
                        <label>Family Role</label>
                        <select name="family_role_id" id="family_role">
                            <option>Select</option>
                            <option value="1">Biological Parent</option>
                            <option value="2">GrandParent</option>
                            <option value="3">Step-Parent</option>
                            <option value="4">Live-in</option>
                            <option value="5">Foster Parent</option>
                            <option value="6">Adoptive Parent</option>
                            <option value="7">Other</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4" id="family_role_other">
                        <label>Other Relative</label>
                        <input type="text" name="family_role_other">
                    </div>
                </div>

            <br>
            <button type="submit" class="btn-primary btn-lg">submit</button>

        </form>
    </div>
        </div>
    @include('partials.return')
@endsection