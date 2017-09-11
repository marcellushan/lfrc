@extends('layouts.app') @section('content')

<div class="well">
   <h2>Families</h2>


    <table class="table">
        <tr>
            <th>
                Name
            </th>
            <th>
                Case ID
            </th>
            <th>

            </th>
            <th>

            </th>
            <th>

            </th>
        </tr>
        @foreach($families as $family)
            <tr>
                <td>
                    {{$family->name}}
                </td>
                <td>
                    {{$family->case_id}}
                </td>
                <td>
                    <a href="{{URL::to('/')}}/family/{{$family->id}}">Edit</a>
                </td>
                <td>
                    <a href="{{URL::to('/')}}/family/view_all/{{$family->id}}">View</a>
                </td>
                <td>
                    <a href="{{URL::to('/')}}/family/delete/{{$family->id}}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection