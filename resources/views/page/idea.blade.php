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

					<?php
							$user = Auth::user()->id_grade;
					?>

					@if($user == 2)
					<div class="dropdown Dropdown-ideas">
						<button class="btn" id="Dropdown-ideas" type="button" data-toggle="dropdown">
							<img src="img/arrow.png" alt=""></button>
						<ul class="dropdown-menu">
							<li><button id="report">Signaler</button></li>
							<script>
									document.querySelector("#report").onclick = function() { 
									document.querySelector("#card").style.display=(window.getComputedStyle(document.querySelector('#card')).display=='none') ? "block" : "none"; 
									}
							</script>
						</ul>
					</div>
					@endif

					@if($user == 3)
					<div class="dropdown Dropdown-ideas">
						<button class="btn" id="Dropdown-ideas" type="button" data-toggle="dropdown">
							<img src="img/arrow.png" alt=""></button>
						<ul class="dropdown-menu">
							<li><a href="/delIdea/{{ $idea->id }}" id="del">Supprimer</a></li>
							<li><a href="/idToEvent/{{ $idea->id }}" id="transform">Transformer en événement</a></li>
						</ul>
					</div>
					@endif
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
					<a href="#" onclick="like()"> <img src="img/like.png" id="hearth" alt="icone de fav"></a>200k
				</div>
			</div>
			<div class="col-md-1"></div>

		</div>
	</div>
	@endforeach
	<a href="idea"><button type="button" class="btn btn-light" id="createIdea">
			Proposez votre idée
		</button></a>
</div>
@endsection