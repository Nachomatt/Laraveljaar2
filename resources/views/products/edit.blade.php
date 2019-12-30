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
    <h1 class="mt-5">Products</h1>


    <div class="form-group">
        <form action="{{route('products.update', $product)}}" enctype="multipart/form-data" method="post">
            @method('PUT')
            @csrf
            Name: <input type="text" name="name"value="{{$product->name}}"><br>
            Price: <input type="number" name="price" value="{{$product->price}}"><br>
            Image: <input type="file" name="image" accept="image/png, image/jpeg, image/jpg" value="{{$product->image}}" required><br>
            <br> <button type="submit">Submit</button>
        </form>
    </div>

@endsection
