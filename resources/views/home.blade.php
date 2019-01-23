@extends('template')

@section('main')

<div id="carouselExampleIndicators" class="carousel slide  carousel-fade" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/batC.jpg" alt="First slide">
      <div class="carousel-caption d-md-block">
        <p id="p1"> Bienvenue sur le site du BDE </br> CESI Bordeaux </p>
      </div>
    </div>
    <!--<div class="carousel-item">
      <img class="d-block w-100" src="img/social.png" alt="Second slide">
    </div>-->
  </div>
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="row home">
  <div class="col-md-2"></div>

  <div class="col-md-8">
      <h2>Présentation du BDE </h2>
      </br>
      <p>blablablablablablablablablablablablablablablablablablablablablablablab lablablablablablablablablablablablablablabablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla</p>
      <p>blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablab
        lablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla</p>
      <p>blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla
            blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablab
            lablablablablablablablablabla</p>
    </div>

    <div class="col-md-2"></div>
</div>

<div class="row" id="rowHome">

    <h2 class="col-md-12">Membres du BDE</h2>

    <div class="col-md-3 imgHome">
      <img src="img/sancho.jpg" alt="sancho">
    </div>
    <div class="col-md-3 imgHome">
      <img src="img/lp7.jpg" alt="lp7">
    </div>
    <div class="col-md-3 imgHome">
      <img src="img/theo.jpg" alt="theo">
    </div>
    <div class="col-md-3 imgHome">
      <img src="img/alex.jpg" alt="alex">
    </div>

  </div>




@endsection
