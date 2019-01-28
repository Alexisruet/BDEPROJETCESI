
@extends('template')

@section('main')
@foreach ($products as $product)
<div> {{ $product->name }} </div>
        <img src="img/{{ asset($product->urlImage) }}">
       
        <div> {{ $product->price }} € </div>
        <div> {{ $product->description }}  </div>
        <div> {{ $product->stock }}  </div>

        <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right" role="button">Add to Cart</a>
    </div>
@endforeach
@endsection