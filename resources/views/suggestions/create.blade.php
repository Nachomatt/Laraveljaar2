@extends ('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li><br>
                @endforeach
            </ul>
        </div>
    @endif
    <h1 class="mt-5">Suggestions</h1>


    <div class="form-group">
        <form action="{{route('suggestions.store')}}" method="post">
            @csrf
            Description: <input class="tex" name="description"><br>
            <br> <button type="submit">Submit</button>
        </form>
    </div>

@endsection
