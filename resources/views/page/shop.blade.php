@extends('template')

@section('main')
<div class="row shop">
  <div class="col-md-12" id="navShop">
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

      <div class="col-md-2">
        <div class="col-md-2 navShop-item" id="basketShop">
            <button type="button" class="btn btn-light" name="button" href="{{ route('product.shoppingCart') }}">
              <img src="img/panier.png" alt="panier">Panier {{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}
            </button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-12">
    <div class="row top">
      <h5 class="col-md-12">ARTICLES LES PLUS POPULAIRES</h5>
      <a class="carousel-control-prev" href="#carouselShop" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselShop" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <div class="carousel slide  carousel-fade" id="carouselShop" data-ride="carousel">
        <div class="carousel-inner " role="listbox">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/pull1_burned.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/pull2_burned.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/pull4_burned.png" alt="Second slide">
          </div>
        </div>

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


  <div class="col-md-10 shop">
    <div class="row shopCards">

      <div class="col-md-4 ">
        <div class="card shop-item">
          <img class="card-img-top" src="img/pull1.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Item 1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Ajouter au panier</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shop-item">
          <img class="card-img-top" src="img/pull2.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Item 2</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Ajouter au panier</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shop-item">
          <img class="card-img-top" src="img/pull3.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Item 3</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Ajouter au panier</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shop-item">
          <img class="card-img-top" src="img/sancho.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Item 4</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Ajouter au panier</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
