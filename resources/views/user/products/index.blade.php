@extends ('layouts.app')

@section('content')

    @if (session('message'))

        <div  class="alert alert-success"  role="alert">

            {{  session('message')  }}
        </div>

    @endif
    <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group zoekbalk">
            <input type="text" class="form-control" name="q"
                   placeholder="Search for products by name or price..."> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
        </div>
    </form>

    <div class="container">
        @if(isset($details))

            <p class="knoptekst"> U heeft gezocht voor: <b> {{ $query }} </b></p>
            <h2 class="knoptekst2">Resultaten</h2>
            <a class="goback2" href="{{route('user.products.index')}}">Terug naar het productenoverzicht</a>
            <table class="table table-striped infotabel">
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Preview</th>
                    <th>Add Wishlist</th>
                    <th>Buy Product</th>
                </tr>
                </thead>
                <tbody>
                @foreach($details as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>€{{$user->price}}</td>
                        <td><img class="productfoto" src="{{ Storage::url($user->image) }}"></td>
                        <td><button class="aanpassen4" type="submit">Add to WishList</button> <br> </td>
                          <td>  <button class="aanpassen5" type="submit">Add to ShoppingCart</button></td>

                    </tr>
                @endforeach
                </tbody>
            </table>

    </div>
    @else
        @if(!empty($successMsg))
            <div class="alert alert-success"> {{ $successMsg }}</div>
        @endif
        <div class="container productlijst">
            @foreach($products->chunk(3) as $items)
                <div class="row course-set courses__row">
                    @foreach($items as $item)
                        @if($item->image)
                            <article class="productitem col-md-3 course-block course-block-lessons">
                                <img class="productfotonormaal" src="{{ Storage::url($item->image) }}"><br>
                                Naam:{{$item->name}}<br>
                                Prijs:€{{$item->price}}<br><br>
                                <a class="aanpassen2" href="{{ route('user.products.show', $item->id) }}">Check Product</a>
                                <form action="{{route('user.wishlists.store')}}" method="post">
                                    @csrf

                                    <input type="hidden" value="{{$item->id}}" class="form-control" name="id">

                                    <button class="aanpassen2" type="submit">Add to WishList</button>
                                </form>
                                <form action="{{route('user.shoppingcarts.store')}}" method="post">
                                    @csrf

                                    <input type="hidden" value="{{$item->id}}" class="form-control" name="id">

                                    <button class="aanpassen3" type="submit">Add to ShoppingCart</button>
                                </form>
                            </article>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
    @endif
@endsection
