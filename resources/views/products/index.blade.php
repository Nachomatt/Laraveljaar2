@extends ('layouts.app')

@section('content')



<h1 class="mt-5 knoptekst2">Products</h1>


@if (session('message'))

    <div  class="alert alert-success"  role="alert">

        {{  session('message')  }}
    </div>

@endif


<nav class="nav">
    <ul class="nav nav-tabs">
        <li>
            <a class="nav-link knopje" href="{{ route('products.create') }}"><h2 class="knoptekst">Create new product</h2></a>
        </li>
    </ul>
</nav>

<table class="table table-striped infotabel">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Details</th>
        <th scope="col">Image</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td scope="row">{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>€{{ $product->price }}</td>
            <td class="details"><a href="{{ route('products.show',$product->id) }}"><h2 class="knoptekst">Details</h2></a></td>
            <td>@if($product->image)
                    <img class="productfoto" src="{{ Storage::url($product->image) }}"><br>
                @endif</td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
