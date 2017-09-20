@extends('layouts.app') @section('content')
@include('partials.family_header')
    <div class="well">
        <h1> Environment</h1>
        @include('partials.ncfas_display', ['names' => 'environments', 'name' => 'environment', 'nameComments' => 'environmentComments'])
        <h1> Parental Capabilities</h1>
        @include('partials.ncfas_display', ['names' => 'parentalCapabilities', 'name' => 'parentalCapability', 'nameComments' => 'parentalCapabilitiesComments'])
        <h1> Family Interactions</h1>
        @include('partials.ncfas_display', ['names' => 'familyInteractions', 'name' => 'familyInteraction', 'nameComments' => 'familyInteractionsComments'])
        <h1> Family Safety</h1>
        @include('partials.ncfas_display', ['names' => 'familySafeties', 'name' => 'familySafety', 'nameComments' => 'familySafetiesComments'])
        <h1>Child Well Being</h1>
        @include('partials.ncfas_display', ['names' => 'childWellBeings', 'name' => 'childWellBeing', 'nameComments' => 'childWellBeingsComments'])
        <h1> Social/Community Life</h1>
        @include('partials.ncfas_display', ['names' => 'socialCommunityLives', 'name' => 'socialCommunityLife', 'nameComments' => 'socialCommunityLivesComments'])
        <h1> Self-Suffiency</h1>
        @include('partials.ncfas_display', ['names' => 'selfSufficiencies', 'name' => 'selfSufficiency', 'nameComments' => 'selfSufficienciesComments'])
        <h1>Family Health</h1>
        @include('partials.ncfas_display', ['names' => 'familyHealths', 'name' => 'familyHealth', 'nameComments' => 'familyHealthsComments'])
</div>
@include('partials.return')
@endsection