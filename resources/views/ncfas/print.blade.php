<h1>Family Resource Center</h1>
<h2>Family: {{$family->name}}</h2>
<h3>Phase: {{$phase}}</h3>
<h3> Environment</h3>
        @include('partials.ncfas_print', ['names' => 'environments', 'name' => 'environment', 'nameComments' => 'environmentComments'])
        <h3> Parental Capabilities</h3>
        @include('partials.ncfas_print', ['names' => 'parentalCapabilities', 'name' => 'parentalCapability', 'nameComments' => 'parentalCapabilitiesComments'])
        <h3> Family Interactions</h3>
        @include('partials.ncfas_print', ['names' => 'familyInteractions', 'name' => 'familyInteraction', 'nameComments' => 'familyInteractionsComments'])
        <h3> Family Safety</h3>
        @include('partials.ncfas_print', ['names' => 'familySafeties', 'name' => 'familySafety', 'nameComments' => 'familySafetiesComments'])
        <h3>Child Well Being</h3>
        @include('partials.ncfas_print', ['names' => 'childWellBeings', 'name' => 'childWellBeing', 'nameComments' => 'childWellBeingsComments'])
        <h3> Social/Community Life</h3>
        @include('partials.ncfas_print', ['names' => 'socialCommunityLives', 'name' => 'socialCommunityLife', 'nameComments' => 'socialCommunityLivesComments'])
        <h3> Self-Suffiency</h3>
        @include('partials.ncfas_print', ['names' => 'selfSufficiencies', 'name' => 'selfSufficiency', 'nameComments' => 'selfSufficienciesComments'])
        <h3>Family Health</h3>
        @include('partials.ncfas_print', ['names' => 'familyHealths', 'name' => 'familyHealth', 'nameComments' => 'familyHealthsComments'])

