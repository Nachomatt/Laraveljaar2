@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
<html>
<head>
    <title>Page not found...</title>
</head>
<body class="errorbody">


<img class="errorfoto" src="{{ Storage::url('Error.png') }}"><br>

</body>
</html>
@endsection
