@extends('layouts.app')




@section('content')
    <a class="goback" href="{{route('roles.index')}}">Go Back</a>

    <form action="{{route('reviews.store')}}" method="post">
        @csrf
        Review:<textarea id="review" class="form-control" name="review"
                         placeholder="Enter your review here..."></textarea><br>

        Stars:<select class="form-control" name="stars">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>

@endsection

