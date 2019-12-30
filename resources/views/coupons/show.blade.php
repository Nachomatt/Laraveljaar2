@extends('layouts.app')
@can('Moderate Website')
@section('content')
    <a class="goback" href="{{route('coupons.index')}}">Go Back</a>
    <p>code:
        {{$coupon->code}}
    </p>
    <p>Suggestion:
        {{$coupon->expirationdate}}
    </p>
    <p>Suggestion:
        {{$coupon->discount}}
    </p>


    <br>
    <br>
    <a class="aanpassen"  href="{{route('coupons.edit',$coupon->id)}}">Edit suggestion</a>
    <br>
    <br>
    <form action="{{ route('coupons.destroy', $coupon) }}" method="post">
        @csrf @method('delete')
        <button type="submit" class="verwijderen" onclick="confirm('Are you sure, you want to delete product: {{ $coupon->id }}?');">Delete coupon</button>
    </form>
@endsection
@endcan