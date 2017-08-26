<h4>
        <h1>Category: {{$category->name}}</h1>
        <h2>Phase: {{$phase->name}}</h2>
    @forelse($ncfases as $ncfas)
        <div class="row">
            {{$ncfas->subCategory->name}}
            {{$ncfas->score->name}}
        </div>
    @empty
        none
    @endforelse
</h4>