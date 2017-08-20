@extends('layouts.app') @section('content')

<div class="well">
    <form action="{{URL::to('/')}}/ncfas/new_ncfas" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6">
                Select Phase<br>
                <input type="radio" name="phase" value="1">Intake<br>
                <input type="radio" name="phase" value="2">Interim<br>
                <input type="radio" name="phase" value="3">Closure<br>
            </div>
            <div class="col-md-6">
                Select Category<br>

                <select name="category">
                    <option>Select</option>
                @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <button type="submit">Submit</button>
    </form>

@endsection