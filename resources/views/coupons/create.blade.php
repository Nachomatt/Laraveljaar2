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
    <h1 class="mt-5">Coupons</h1>


    <div class="form-group">
        <form action="{{route('coupons.store')}}"  enctype="multipart/form-data" method="post">
            @csrf
            Code: <input class="form-control" type="text" name="code"><br>
            Expirationdate: <input class="form-control" type="date" name="expirationdate" ><br>
            Discount: <input class="form-control" type="number" name="discount" ><br>
            <br> <button type="submit">Submit</button>
        </form>
    </div>

@endsection
