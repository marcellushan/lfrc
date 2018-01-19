@extends('layouts.app') @section('content')
    {{--@include('partials.family_header')--}}
    <div class="well">
        <form action="{{URL::to('/')}}/parent_aide" id="new_parent_aide" method="post">
            {{--<input type="hidden" name="id" value="{{$family->id}}">--}}
            {{ csrf_field() }}
            <h1 align="center">Add Parent Aide</h1>
            <div class="row">
                <div class="form-group col-md-4 col-md-offset-3">
                    <label for="name">Last Name:</label>
                    <input type="text" name="last_name" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="name">First Name:</label>
                    <input type="text" name="first_name" class="form-control">
                </div>
                </div>


            <br>
            <button type="submit" class="btn-primary btn-lg">submit</button>

        </form>
</div>
        {{--@include('partials.return')--}}
@endsection