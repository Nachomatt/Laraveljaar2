@extends ('layouts.app')

@section('content')



    <h1 class="mt-5">Coupons</h1>


    @if (session('message'))

        <div  class="alert alert-success"  role="alert">

            {{  session('message')  }}
        </div>

    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li>
                <a class="nav-link knopje" href="{{ route('coupons.create') }}"><h2 class="knoptekst">Create new coupon</h2></a>
            </li>
        </ul>
    </nav>

    <table class="table table-striped infotabel">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Code</th>
            <th scope="col">Expirationdate</th>
            <th scope="col">Discount</th>
            <th scope="col">Details</th>
        </tr>
        </thead>
        <tbody>
        @foreach($coupons as $coupon)
            <tr>
                <td scope="row">{{ $coupon->id }}</td>
                <td>{{ $coupon->code }}</td>
                <td>{{ $coupon->expirationdate }}</td>
                <td>{{ $coupon->discount }}</td>
                <td><a href="{{ route('coupons.show',$coupon->id) }}">Details</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
