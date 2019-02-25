@extends('template')

@section('main')
<?php
	$user = Auth::user()->id_grade;
?>
<div class="col-md-1">
	@if($user == 3)
	<a href="event"><button type="button" class="btn btn-light" id="createEvent">
			Add event
		</button></a>
</div>
<div class="container">
	<div class="row">

		@endif
		@foreach ($events as $event)
		<div class="idea card bg-light col-md-5">
			<div class="card-body">
				<h3>{{ $event->title }}</h3>
				<p>{{ $event->description }}</p>
				@foreach($pictures as $picture)
				@if($picture->id_event == $event->id)
				<div class="imgWei">
					<img class="card-img-top d-block" src="img/{{ $picture->url }}" height="250" width="100" alt="photo de l'event">
				</div>
				@endif
				@endforeach
				<a href="/events/{{ $event -> id}}">
					<button type="submit" class="btn link btn-dark" id="inscription">
					Pour s'inscrire
				</button></a>
			</div>
		</div>
		<div class="col-md-1"></div>

		@endforeach

	</div>
	@endsection
