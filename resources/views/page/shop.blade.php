@extends('template')

@section('main')
<div class="row shop">
  <div class="col-md-10" id="navShop">
    <div class="row">
      <div class="col-md-1"> </div>
      <div class="col-md-3">
        <div class="input-group mb-3">
          <input type="text" class="form-control"  aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Rechercher</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group row">
            <label for="centre" class="col-md-4 col-form-label text-md-right">Trier par :</label>

            <div class="col-md-6">
                <select name="centre" class="form-control">
                    <option value="1"></option>
                    <option value="2">Prix croissant</option>
                    <option value="3">Prix décroissant</option>
                    <option value="4">Popularité</option>
                </select>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-2" id="basketShop">
    <div class="container row">
      <div class="col-md-2"> </div>
      <div class="col-md-2">
        <button type="button" class="btn btn-light" name="button" href="basket"><img src="img/panier.png" alt="panier">Panier</button>
      </div>
    </div>
  </div>

  <div class="col-md-2" id="leftShop">


    <div class="card" style="width: 18rem;">
      <h5 class="card-title">PROMO DE LA SEMAINE</h5>
      <img class="card-img-top" src="img/alex.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">A vendre : le pire dev back du CESI. 10 balles</p>
      </div>
    </div>
  </div>
  <div class="col-md-8 shop" id="contentShop">
boutique
  </div>
  <div class="col-md-2"> </div>
</div>
@endsection
