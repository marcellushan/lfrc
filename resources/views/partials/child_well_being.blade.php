<h4>
        {{--<h1>Category: {{$category->name}}</h1>--}}
        {{--<h2>Phase: {{$phase->name}}</h2>--}}
    @forelse($childWellBeings as $childWellBeing)
        <div class="row">
                <div class="col-md-6">
            {{$childWellBeing->subCategory->name}}</div>
                <div class="col-md-6">
                        {{$childWellBeing->score->name}}</div>
        </div>
    @empty
                <div class="col-md-12"> No entries </div>

    @endforelse
</h4>