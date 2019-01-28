@extends('template')

@section('main')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php
				$user = Auth::user()->id_grade;
			?>
			@if($user == 3)
				<a href="/event" ><button type="button" class="btn btn-light" id="createEvent" >
					Add event
				</button></a>
		</div>
			@foreach ($events as $event)
			<div class="idea card bg-light col-md-5">
				<div class="card-body">
					<h3>{{ $event->title }}</h3>
					<p>{{ $event->date }}</p>
					<p>{{ $event->description }}</p>
          @foreach($pictures as $picture)
          	@if($picture->id_event == $event->id)
							<div class="imgWei">
								<img class="card-img-top d-block" src="img/{{ $picture->url }}" height="250" width="100" alt="photo de l'event">
							</div>
						@endif
					@endforeach
  				<a href="/events/{{ $event -> id}}">
						<button type="submit" class="btn link btn-dark" id="inscription">S'inscrire</button></a>
				</div>
			</div>
			<div class="col-md-1"></div>

			@endforeach
<<<<<<< HEAD
			<?php
				$user = Auth::user()->id_grade;
			?>
			@if($user == 3)
				<a href="event"><button type="button" class="btn btn-light" id="createEvent" >
					Add event
				</button></a>
=======

>>>>>>> 6de90f5b4081e592c22b1f099e897fa17dd7fed3
			@endif
	</div>
	@endsection
