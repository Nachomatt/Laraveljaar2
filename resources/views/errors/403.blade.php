@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
<html>
<head>
    <title>Unauthorized Access</title>
</head>
<body class="errorbody">


<img class="errorfoto" src="{{ Storage::url('Error403.png') }}"><br>

</body>
</html>
@endsection
