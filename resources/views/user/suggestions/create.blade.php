@extends ('layouts.app')

@section('content')
    @if (session('message'))

        <div  class="alert alert-success"  role="alert">

            {{  session('message')  }}
        </div>

    @endif
    <h1 class="mt-5">Suggestions</h1>


    <div class="form-group">
        <form action="{{route('user.suggestions.store')}}" method="post">
            @csrf
            Description: <input type="text" name="description"><br>
            <br> <button type="submit">Submit</button>
        </form>
    </div>

@endsection