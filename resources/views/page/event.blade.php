@extends('template')

@section('main')

<div class="container">
	<div class="row">
			@foreach ($events as $event)
			<div class="idea card bg-light col-md-5">
				<div class="card-body">
					<h3>{{ $event->title }}</h3>
					<p>{{ $event->description }}</p>
				</div>
				<div>
        
        
        
                    @foreach($pictures as $picture)
                    @if($picture->id_event == $event->id)
                    <img src="img/{{ $picture->url }}">
                    @endif
                    @endforeach
                    <form action="{{ route('inscrire') }}" method='POST' id = 'form' enctype="multipart/form-data">
                {{csrf_field()}}
                <a
                href="/events/{{ $event -> id}}"
                <button type="submit"id="inscription">Pour s'inscrire</button>
                </a>
                
                    </form>
                    </div> 

				<form action="{{ route('commenter') }}" method='POST' id='gg' enctype="multipart/form-data">
					{{csrf_field()}}
					<p><input placeholder="Commentaire" class="form-control center color-text" type='text' name='comment' id='comment' required></input></p>
					<button type="submit" class="btn link btn-dark" id="commente">Commenter</button>
				</form>
			</div>
			<div class="col-md-1">


			</div>

		@endforeach

	</div>
	<!-- if you are admin-->
	<a href="/event"><button type="button" class="btn btn-light" id="createEvent" >
		Add event
	</button></a>
</div>
@endsection
