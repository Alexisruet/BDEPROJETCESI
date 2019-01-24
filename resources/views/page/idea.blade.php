@extends('template')

@section('main')

<div class="container idea">
	@foreach ($ideas as $idea)

  <div class="card w-75" id="card">
    <div class="card-body row">

      <div class="col-md-2">
        <div class="roundedImage"> <img src="img/logo_top.png" alt="logo cesi"> </div>
      </div>
			<div class="col-md-7">
	      <div id="tag">
					<?php
						$idUser = $idea->id_user;
						$name = DB::table('users')->whereId($idUser)->first();
					?>
	          <h5>{{ $name->name }} {{ $name->surname }} </h5>
	          <p>&#64;{{ $name->surname }}{{ $name->name }}</p>
	      </div>
			</div>
      <div class="col-md-3">
				<div class="link-with-pupup">
        	<button type="button linky" class="btn link btn-light" id="more-infos">
						Plus d'infos
			 		</button>
						<div class="popup">
							<div class="box">{{ $idea->description }}</div>
						</div>
				</div>
      </div>


      <div class="col-md-2"></div>
      <div class="col-md-8">
        <h5 class="card-title">{{ $idea->title }}</h5>
      </div>
			<div class="col-md-2"></div>

      <div class="col-md-2"></div>
      <div class="col-md-9 row" id="logosLikeBar">
        <div class="col-md-2">
          <img src="img/comment.png" alt="comment">
        </div>
        <div class="col-md-2">
          <img src="img/retweet.png" alt="retweet">
        </div>
        <div class="col-md-2">
          <img src="img/like.png" alt="like">&nbsp21
        </div>
      </div>
			<div class="col-md-1"></div>

    </div>
  </div>
	@endforeach
</div>
@endsection
