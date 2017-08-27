@extends('layouts.app') @section('content')
@include('partials.family_header')
<form action="{{URL::to('/')}}/ncfas" method="post">
    <input type="hidden" name='id' value="{{$family->id}}">
    <input type="hidden" name='category_id' value="{{$category->id}}">
    <input type="hidden" name='phase_id' value="{{$phase->id}}">
{{ csrf_field() }}
    <div class="well">
        <h1>Category: {{$category->name}}</h1>
        <h2>Phase: {{$phase->name}}</h2>
    </div>
    <div class="well">
        <h4>
        @forelse($subCategories as $subCategory)
        <div class="row">
            @include('partials.ncfas_select', compact('subCategory'))
        </div>
        @empty
                    none
        @endforelse
        </h4>

    <button type="submit">Submit</button>
        </form>
</div>
@endsection