@extends ('layouts.app')

@section('content')
    <div class="smallpage">
    @if (session('message'))

        <div  class="alert alert-success"  role="alert">

            {{  session('message')  }}
        </div>

    @endif
    <h2 class="shoppingcart knoptekst2">Your very own Wishlist, {{Auth::user()->name}}</h2>
    <div class="container productlijst2">
        @foreach($wishlist->chunk(3) as $items)
                @foreach($items as $item)
                    @if($item->product->image)
                        <article class="productitem  course-block course-block-lessons">
                            <img class="productfotonormaal" src="{{ Storage::url($item->product->image) }}"><br>
                            Naam:{{$item->product->name}}<br>
                            Prijs:€{{$item->product->price}}<br><br>
                            <a class="aanpassen6" href="{{ route('user.wishlists.show', $item->id) }}">Delete Wishlist Item</a>
                        </article>
                    @endif
                @endforeach
        @endforeach
    </div>
    </div>
@endsection
