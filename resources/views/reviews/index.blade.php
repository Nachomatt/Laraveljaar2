@extends ('layouts.app')

@section('content')
    @if (session('message'))

        <div  class="alert alert-success"  role="alert">

            {{  session('message')  }}
        </div>

    @endif
    <h1 class="mt-5 knoptekst2">Reviews</h1>
    <nav class="nav">
        <ul class="nav nav-tabs">
            <li>
                <a class="nav-link knopje" href="{{ route('reviews.create') }}"><h2 class="knoptekst">Add new Review</h2></a>
            </li>
        </ul>
    </nav>

    <table class="table table-striped infotabel">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Review</th>
            <th scope="col">Stars</th>
            <th scope="col">Details</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reviews as $review)
            <tr>
                <td scope="row">{{ $review->id }}</td>
                <td>{{ $review->review }}</td>
                <td>{{ $review->stars }}</td>
                <td class="details"><a class="nav-link" href="{{ route('reviews.show', $review->id) }}"><h2 class="knoptekst">See Review</h2></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
