@extends('template')

@section('main')
<div class="row shop">
  <div class="col-md-10" id="navShop">
    <div class="row">
      <div class="col-md-1"> </div>
      <div class="col-md-3">
        <div class="input-group mb-3 navShop-item">
          <input type="text" class="form-control"  aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Rechercher</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group row">
          <div class="col-md-2"> </div>
            <label for="centre" class="col-md-4 col-form-label text-md-right navShop-item">Trier par :</label>
            <div class="col-md-5 navShop-item">
                <select name="centre" class="form-control">
                    <option value="1"></option>
                    <option value="2">Prix croissant</option>
                    <option value="3">Prix décroissant</option>
                    <option value="4">Popularité</option>
                </select>
            </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group row">
            <label for="centre" class="col-md-4 col-form-label text-md-right navShop-item">Catégories :</label>
            <div class="col-md-5 navShop-item" >
                <select name="centre" class="form-control">
                    <option value="1"></option>
                    <option value="2">Pull</option>
                    <option value="3">T-shirt</option>
                    <option value="4">Goodies</option>
                </select>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-2" id="basketShop">
    <div class="container row">
      <div class="col-md-1"> </div>
      <div class="col-md-2">
        <button type="button" class="btn btn-light" name="button" href="basket"><img src="img/panier.png" alt="panier">Panier</button>
      </div>
    </div>
  </div>

  <div class="col-md-2" id="leftShop">

    <div class="card-body row">
      <div class="col-md-12  sales">
        <h5 class="card-title" id="SalesTitle">PROMO DE LA SEMAINE</h5>
      </div>
      <div class="col-md-12">
        <img src="img/pull1.png" alt="Item en promo">
      </div>
      <div class="col-md-6">
        <p class="card-text" id="Prix1">Prix : <strike>30€</strike></p>
      </div>
      <div class="col-md-6">
        <p class="card-text" id="Prix2">20€</p>
      </div>
    </div>
  </div>


  <div class="col-md-8 shop">
        <div class="carousel slide  carousel-fade" data-ride="carousel">
          <div class="carousel-inner " role="listbox">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/pull1.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/pull2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/pull3.png" alt="Second slide">
            </div>
          </div>
          <ol class="carousel-indicators">
            <li data-target="#carouselShop" data-slide-to="0" class="active"></li>
            <li data-target="#carouselShop" data-slide-to="1"></li>
            <li data-target="#carouselShop" data-slide-to="2"></li>
          </ol>
          <a class="carousel-control-prev" href="#carouselShop" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselShop" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
  <div class="col-md-2" id="rightShop"> </div>
</div>
@endsection
