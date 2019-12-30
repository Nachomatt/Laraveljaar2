@extends ('layouts.app')

@section('content')

    @if (session('message'))

        <div  class="alert alert-success"  role="alert">

            {{  session('message')  }}
        </div>

    @endif

    @if($product->image)
        <div class="container productlijst">
        <article class="productitem col-md-3 course-block course-block-lessons">
            <img class="productfotonormaal" src="{{ Storage::url($product->image) }}"><br>
            Naam:{{$product->name}}<br>
            Prijs:€{{$product->price}}<br>
            <a href="{{ route('user.products.index') }}">Go to Products</a><br><br>
            <form action="{{route('user.wishlists.store')}}" method="post">
                @csrf

                <input type="hidden" value="{{$product->id}}" class="form-control" name="id">

                <button class="aanpassen2" type="submit">Add to WishList</button>
            </form>
            <form action="{{route('user.shoppingcarts.store')}}" method="post">
                @csrf

                <input type="hidden" value="{{$product->id}}" class="form-control" name="id">

                <button class="aanpassen3" type="submit">Add to ShoppingCart</button>
            </form>
        </article>
            </div>
    @endif


@endsection
