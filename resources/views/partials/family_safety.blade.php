<h4>
        {{--<h1>Category: {{$category->name}}</h1>--}}
        {{--<h2>Phase: {{$phase->name}}</h2>--}}
    @forelse($familySafeties as $familySafety)
        <div class="row">
                <div class="col-md-6">
            {{$familySafety->subCategory->name}}</div>
                <div class="col-md-6">
                        {{$familySafety->score->name}} - {{$familySafety->score->score_value}}</div>
        </div>
    @empty
                <div class="col-md-12"> No entries </div>

    @endforelse

        @if(@$familySafetiesComments)
                <h4>Comments:</h4>
                {{@$familySafetiesComments->comments}}
        @endif
</h4>