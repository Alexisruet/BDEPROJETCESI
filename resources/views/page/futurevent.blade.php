@extends('template')

@section('main')

<div class="container">
	<div class="row">
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
  				<button type="submit" class="btn link btn-dark" id="inscription">
						<a href="/events/{{ $event -> id}}">Pour s'inscrire</a>
					</button>
				</div>
			</div>
			<div class="col-md-1"></div>

			@endforeach
			<?php
				$user = Auth::user()->id_grade;
			?>
			@if($user == 3)
				<a href="event"><button type="button" class="btn btn-light" id="createEvent" >
					Add event
				</button></a>
			@endif
	</div>
	@endsection
