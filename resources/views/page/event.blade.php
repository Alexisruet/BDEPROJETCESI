@extends('template')

@section('main')

<div class="container">
	<div class="row">
		<div class="row espace">

				@foreach ($events as $event)
				<div class="idea">
								<div>
										Événement : {{ $event->title }}
								</div>
								<div>
										Description : {{ $event->description }}
						</div>

										<div>
										@foreach($pictures as $picture)
										@if($picture->id_event == $event->id)
										<img src="img/{{ $picture->url }}">
										@endif
										@endforeach
										</div>
						</div>
				@endforeach
		</div>
	</div>
    <h1 class="text-center">Hello</h1>

</div>
@endsection
