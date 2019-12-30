@extends ('layouts.app')

@section('content')
    @if (session('message'))

        <div class="alert alert-success" role="alert">

            {{  session('message')  }}
        </div>

    @endif
    <div class="smallpage2">
        <h2 class="shoppingcart knoptekst2">Your very own Shopping Cart, {{Auth::user()->name}}</h2>
        <a class="aanpassen6 knopje betalen" href="{{ route('user.shoppingcarts.empty') }}">Checkout</a>
        <div class="container productlijst2">
            @foreach($shoppingCarts->chunk(3) as $items)
                @foreach($items as $item)
                    @if($item->product->image)
                        <article class="productitem course-block course-block-lessons">
                            <img class="productfotonormaal" src="{{ Storage::url($item->product->image) }}"><br>
                            Naam:{{$item->product->name}}<br>
                            Prijs:€{{$item->product->price}}<br><br>
                            <a class="aanpassen6" href="{{ route('user.shoppingcarts.show', $item->id) }}">Delete
                                Shopping Cart Item</a>
                        </article>


                    @endif

                @endforeach
            @endforeach
            <div class="totaalprijs">
                @foreach($items as $item)
                    {{$total = $total + $item->product->price}}<br>
                @endforeach
            </div>
            <article class="productitem betalen course-block course-block-lessons">


                Totaalprijs:€{{$total}}<br>

                <a class="aanpassen6" href="{{ route('user.shoppingcarts.empty') }}">Checkout</a>
            </article>


        </div>
@endsection
