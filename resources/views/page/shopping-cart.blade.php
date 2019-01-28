@extends('template')

@section('main')

<div class="container">

  <h2>Panier {{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</h2>
@foreach($products as $product)

  <ul class="list-group">
    <li class="list-group-item col-md-12" >
      <div class="row">

        <div class="col-md-2">
          <strong>Nom : {{ $product['item']['name'] }}</strong>
        </div>
        <div class="col-md-2">
          <span class="label label-success">Prix : {{ $product['price'] }}</span>
        </div>
        <div class="col-md-2">
          <span class="label label-succes">Quantité : {{ $product['qty'] }}</span>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">
            <button><i class="fas fa-times"></i>&nbspSupprimer</button>
          </a>
        </div>

      </div>
    </li>
  </ul>

@endforeach

</div>

@endsection
