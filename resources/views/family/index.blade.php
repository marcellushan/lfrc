@extends('layouts.app') @section('content')

<div class="well">
    @include('partials.families_list')
    @include('partials.case_ID')
   <h2 align="center">Families</h2>

<div class="row">
    <h3 class="col-sm-6 col-sm-offset-2">
            Name
    </h3>
    <h3 class="col-sm-4">
            Case ID
</h3>
</div>
    @foreach($families as $family)
        <div class="row">
            <h3 class="col-sm-6 col-sm-offset-2 not_bold">
                <a href="{{URL::to('/')}}/family/{{$family->id}}">{{$family->name}}</a>
            </h3>
            <h3 class="col-sm-4 not_bold">
                {{$family->case_id}}
            </h3>
        </div>
    @endforeach
</table>
</div>
                        {{$families->links()}}
@endsection