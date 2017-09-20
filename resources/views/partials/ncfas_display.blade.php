<h4>
        {{--<h1>Category: {{$category->name}}</h1>--}}
        {{--<h2>Phase: {{$phase->name}}</h2>--}}
    @forelse($$names as $$name)
        <div class="row">
                <div class="col-md-6">
            {{$$name->subCategory->name}}</div>
                <div class="col-md-6">
                        {{$$name->score->name}} - {{$$name->score->score_value}}</div>
        </div>
    @empty
                <div class="col-md-12"> No entries </div>
    @endforelse

        @if(@$$nameComments)
                <h4>Comments:</h4>
                {{@$$nameComments->comments}}
        @endif
</h4>