@extends('template')

@section('main')

<div class="container idea">
  <div class="card w-75">
    <div class="card-body row">
      <div class="col-md-2">
        <div class="roundedImage" style="background-color:red 0px 0px;"></div>
      </div>
      <div id="tag">
          <h5>Nom Prénom</h5>
          <p>@PrenomNom</p>
      </div>
    </div>

    <div class="text row">
      <div class="col-md-2"></div>
      <div class="col-md-9">
        <h5 class="card-title">Oh ce serait une bonne idée d'oganiser un soccer un jeudi !</h5>
      </div>

    </div>

    <div class="date row">
      <div class="col-md-2"></div>
      <div class="col-md-9">
        <p class="card-text">11:24 - 23 Janv. 2019</p>
      </div>
    </div>

    <div class="likesNumber row">
      <div class="col-md-2"></div>
      <div class="col-md-9">
        <p class="card-text">11:24 - 23 Janv. 2019</p>
      </div>
    </div>

    <div class="likebar row">
      <div class="col-md-2"></div>
      <div class="col-md-9 row" id="logosLikeBar">
        <div class="col-md-2">
          <img src="img/comment.png" alt="comment">
        </div>
        <div class="col-md-2">
          <img src="img/retweet.png" alt="retweet">
        </div>
        <div class="col-md-2">
          <img src="img/like.png" alt="like">
        </div>
      </div>
    </div>

  </div>
</div>

@endsection
