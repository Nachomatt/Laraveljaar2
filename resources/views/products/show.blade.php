@extends('layouts.app')
@can('Moderate Website')
@section('content')
    <a class="goback" href="{{route('products.index')}}">Go Back</a>
    <p>Product:
        {{$product->name}}
    </p>
    <p>Price:
        €{{$product->price}}
    </p>
    @if($product->image)
        <img class="productfotonormaal" src="{{ Storage::url($product->image) }}"><br>
    @endif
    <br>
    <br>
    <a class="aanpassen"  href="{{route('products.edit',$product->id)}}">Edit product</a>
    <br>
    <br>
    <form action="{{ route('products.destroy', $product) }}" method="post">
        @csrf @method('delete')
        <button type="submit" class="verwijderen" onclick="confirm('Are you sure, you want to delete product: {{ $product->name }}?');">Delete product</button>
    </form>
@endsection
@endcan
