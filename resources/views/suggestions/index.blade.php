@extends ('layouts.app')

@section('content')



    <h1 class="mt-5 knoptekst2">Suggestions</h1>
    @if (session('message'))

        <div  class="alert alert-success"  role="alert">

            {{  session('message')  }}
        </div>

    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li>
                <a class="nav-link knopje" href="{{ route('suggestions.create') }}"><h2 class="knoptekst">Create new suggestion</h2></a>
            </li>
        </ul>
    </nav>

    <table class="table table-striped infotabel">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">description</th>
            <th scope="col">details</th>
        </tr>
        </thead>
        <tbody>
        @foreach($suggestions as $suggestion)
            <tr>
                <td scope="row">{{ $suggestion->id }}</td>
                <td>{{ $suggestion->description }}</td>
                <td class="details"><a href="{{ route('suggestions.show',$suggestion->id) }}"><h2 class="knoptekst">Details</h2></a></td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
