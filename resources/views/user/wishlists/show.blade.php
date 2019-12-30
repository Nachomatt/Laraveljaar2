@extends ('layouts.app')

@section('content')
        @if (session('message'))

                <div  class="alert alert-success"  role="alert">

                        {{  session('message')  }}
                </div>

        @endif

        <p>If you delete this item you can always add it back to your wishlist</p>
        <form action="{{ route('user.wishlists.destroy', $wishlist) }}" method="post">
                @csrf @method('delete')
                <button type="submit" class="verwijderen" onclick="confirm('Are you sure, you want to delete the product ?');">Delete product</button>
        </form>


@endsection