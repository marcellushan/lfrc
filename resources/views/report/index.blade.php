@extends('layouts.app') @section('content')

<div class="well">
   <h2 align="center">Families</h2>

<div class="row">
    <h5 class="col-sm-2">
            Name
    </h5>
    <h5 class="col-sm-1">
            Case ID
    </h5>
    <h5 class="col-sm-2">
        Parent Aide
    </h5>
    <h5 class="col-sm-2">
        Status
    </h5>
</div>
    @foreach($families as $family)
        <div class="row">
            <h5 class="col-sm-2 not_bold">
                <a href="{{URL::to('/')}}/family/{{$family->id}}">{{$family->name}}</a>
            </h5>
            <h5 class="col-sm-1 not_bold">
                {{$family->case_id}}
            </h5>
            <h5 class="col-sm-2 not_bold">
                {{$family->parentAide->last_name}}
            </h5>
            <h5 class="col-sm-2 not_bold">
                @if($family->closed) Closed @else Open @endif
            </h5>
        </div>
    @endforeach
</table>
</div>
@endsection