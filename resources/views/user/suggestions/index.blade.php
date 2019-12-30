@extends ('layouts.app')

@section('content')
    @if (session('message'))

        <div class="alert alert-success" role="alert">

            {{  session('message')  }}
        </div>

    @endif
    <h2 class="knoptekst2 kopje">Suggestions</h2>
    <a class="nav-link knopje reviewadd" href="{{ route('suggestions.create') }}"><h2 class="knoptekst">Add suggestions</h2></a>

    <div class="container productlijst3">
        @foreach($suggestions->chunk(3) as $items)
            @foreach($items as $item)
                <article class="productitem2 course-block course-block-lessons">
                    Suggestion: {{$item->description}}<br>
                    User: {{$item->user->name}}<br><br>
                    <a class="aanpassen9" href="{{ route('suggestions.edit', $item->id) }}">Edit</a>
                    <a class="aanpassen10" href="{{ route('suggestions.show', $item->id) }}">Details</a>
                </article>
            @endforeach
        @endforeach
    </div>
@endsection
