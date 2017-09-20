<table>

@forelse($$names as $$name)
        <tr>
                <td>
                        {{$$name->subCategory->name}}
                </td>
                <td>
                        {{$$name->score->name}} - {{$$name->score->score_value}}
                </td>

        </tr>
    @empty
                <div class="col-md-12"> No entries </div>
    @endforelse
        @if(@$$nameComments)
                <tr>
                        <td colspan="2">
                                <h4>Comments:</h4>
                                {{@$$nameComments->comments}}
                        </td>
                </tr>
        @endif
</table>
