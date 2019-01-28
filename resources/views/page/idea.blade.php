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
				<div class="row">
					<div class="link-with-pupup">
						<button type="button linky" class="btn link btn-light" id="more-infos">
							Plus d'infos
						</button>
							<div class="popup">
								<div class="box">{{ $idea->description }}</div>
							</div>
					</div>
					<div class="dropdown Dropdown-ideas">
						<button class="btn" id="Dropdown-ideas" type="button" data-toggle="dropdown">
							<img src="img/arrow.png" alt=""></button>
						<ul class="dropdown-menu">
							<li><a href="#" id="report">Signaler</a></li>
							<li><a href="#" id="transform">Transformer en événement</a></li>
						</ul>
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
        	<a href="#"> <img src="img/comment.png" alt=""></a>
        </div>
        <div class="col-md-2">
        	<a href="#"> <img src="img/retweet.png" alt=""></a>
        </div>
        <div class="col-md-2">
          <a href="#"> <img src="img/like.png" alt="">200k</a>
        </div>
      </div>
			<div class="col-md-1"></div>

    </div>
  </div>
	@endforeach
	<a href="idea"><button type="button" class="btn btn-light" id="createIdea" >
		Proposez votre idée
	</button></a>
</div>
@endsection
