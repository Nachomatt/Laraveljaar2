@extends('layouts.app')
@can('Moderate Website')
@section('content')
    <a class="goback" href="{{route('suggestions.index')}}">Go Back</a>
    <p>Suggestion:
        {{$suggestion->description}}
    </p>


    <br>
    <br>
    <a class="aanpassen"  href="{{route('suggestions.edit',$suggestion->id)}}">Edit suggestion</a>
    <br>
    <br>
    <form action="{{ route('suggestions.destroy', $suggestion) }}" method="post">
        @csrf @method('delete')
        <button type="submit" class="verwijderen" onclick="confirm('Are you sure, you want to delete product: {{ $suggestion->id }}?');">Delete suggestion</button>
    </form>
@endsection
@endcan
