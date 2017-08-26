<h4>
        {{--<h1>Category: {{$category->name}}</h1>--}}
        {{--<h2>Phase: {{$phase->name}}</h2>--}}
    @forelse($parentalCapabilities as $parentalCapability)
        <div class="row">
                <div class="col-md-6">
            {{$parentalCapability->subCategory->name}}</div>
                <div class="col-md-6">
                        {{$parentalCapability->score->name}}</div>
        </div>
    @empty
                <div class="col-md-6"> No entries </div>

    @endforelse
</h4>