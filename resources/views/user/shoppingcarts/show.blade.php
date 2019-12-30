@extends ('layouts.app')

@section('content')

    @if (session('message'))

        <div  class="alert alert-success"  role="alert">

            {{  session('message')  }}
        </div>

    @endif
    <p>If you delete this item you can always add it back to your ShoppingCart</p>
    <form action="{{ route('user.shoppingcarts.destroy', $shoppingcart) }}" method="post">
        @csrf @method('delete')
        <button type="submit" class="verwijderen" onclick="confirm('Are you sure, you want to delete product: ?');">Delete product</button>
    </form>


@endsection