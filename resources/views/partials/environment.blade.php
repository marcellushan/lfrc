<h4>
        {{--<h1>Category: {{$category->name}}</h1>--}}
        {{--<h2>Phase: {{$phase->name}}</h2>--}}
    @forelse($environments as $environment)
        <div class="row">
                <div class="col-md-6">
            {{$environment->subCategory->name}}</div>
                <div class="col-md-6">
                        {{$environment->score->name}} - {{$environment->score->score_value}}</div>
        </div>
    @empty
                <div class="col-md-12"> No entries </div>
    @endforelse

        @if(@$environmentComments)
                <h4>Comments:</h4>
                {{@$environmentComments->comments}}
        @endif
</h4>