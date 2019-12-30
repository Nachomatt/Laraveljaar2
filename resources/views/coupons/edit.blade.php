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
        <form action="{{route('coupons.update', $coupon)}}" enctype="multipart/form-data" method="post">
            @method('PUT')
            @csrf
            Code: <input type="text" name="code" value="{{$coupon->code}}"><br>
            expirationdate: <input type="text" name="expirationdate" value="{{$coupon->expirationdate}}"><br>
            discount: <input type="text" name="discount" value="{{$coupon->discount}}"><br>
            <br> <button type="submit">Submit</button>
        </form>
    </div>

@endsection
