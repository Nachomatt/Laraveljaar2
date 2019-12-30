@extends('layouts.app')
@section('content')
    <a class="goback" href="{{route('reviews.index')}}">Go Back</a>
    <p>Review:
        {{$review->review}}
    </p>
    <p>Stars:
        {{$review->stars}}
    </p>
    @can('Moderate Website')

    <br>
    <br>

    <a class="aanpassen"  href="{{route('reviews.edit',$review->id)}}">Edit review</a>
    <br>
    <br>
    <form action="{{ route('reviews.destroy', $review) }}" method="post">
        @csrf @method('delete')
        <button type="submit" class="verwijderen" onclick="confirm('Are you sure, you want to delete review: {{ $review->review }}?');">Delete review</button>
    </form>
    @endcan
@endsection

