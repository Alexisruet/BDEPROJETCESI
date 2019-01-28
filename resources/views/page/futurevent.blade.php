@extends('template')

@section('main')

<div class="container">
	<div class="row">
			@foreach ($events as $event)
			<div class="idea card bg-light col-md-5">
				<div class="card-body">
					<h3>{{ $event->title }}</h3>
					<p>{{ $event->description }}</p>
					
                </a>
				</div>
				<div>
                @foreach($pictures as $picture)
          	@if($picture->id_event == $event->id)
							<div class="imgWei">
								<img class="card-img-top d-block" src="img/{{ $picture->url }}" height="250" width="100" alt="photo de l'event">
							</div>
						@endif
						</div>
		<div>
			
						@endforeach
        
					
            		<button type="submit" class="btn link btn-dark" id="inscription"><a href="/events/{{ $event -> id}}">Pour s'inscrire</a></button>
					</div>

				
			<div class="col-md-1">


			</div>
            @endforeach
            @endsection