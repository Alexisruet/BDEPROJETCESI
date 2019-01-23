@extends('template')

@section('main')
<div class="row shop">
  <div class="col-md-10 cat" id="navShop">
    salam
  </div>
  <div class="col-md-2 cat" id="basketShop">
    <div class="container row">
      <div class="col-md-2">
        <img src="img/panier.png" alt="panier">
      </div>
      <div class="col-md-10">
        <h4>&nbspPanier</h4>
        <p>&nbsp(2 articles)</p>
      </div>


    </div>
  </div>

  <div class="col-md-2" id="leftShop">


    <div class="card" style="width: 18rem;">
      <h5 class="card-title">Card title</h5>
      <img class="card-img-top" src="img/alex.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>
  <div class="col-md-8 shop" id="contentShop">
boutique
  </div>
  <div class="col-md-2"> </div>
</div>



@endsection
