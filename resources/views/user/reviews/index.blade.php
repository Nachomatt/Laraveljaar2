@extends ('layouts.app')

@section('content')
    @if (session('message'))

        <div class="alert alert-success" role="alert">

            {{  session('message')  }}
        </div>

    @endif
    <h2 class="knoptekst2 kopje">Reviews</h2>
    <a class="nav-link knopje reviewadd" href="{{ route('reviews.create') }}"><h2 class="knoptekst">Add Review</h2></a>

    <div class="container productlijst3">
        @foreach($reviews->chunk(3) as $items)
            @foreach($items as $item)
                <article class="productitem2 course-block course-block-lessons">
                    Review:{{$item->review}}<br>
                    Stars:{{$item->stars}}
                    <span><a class="aanpassen7 " href="{{ route('reviews.edit', $item->id) }}">Edit</a></span>
                    <a class="aanpassen8 rechterkant" href="{{ route('reviews.show', $item->id) }}">Details</a>
                </article>

            @endforeach
        @endforeach
    </div>
@endsection
