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
          @endforeach

        </div>
		@foreach($To_comments as $ToComment)
		<?php
						$idUser = $ToComment->id_user;
            $name = DB::table('users')->whereId($idUser)->first();
					?>
						          <h5>{{ $name->name }} {{ $name->surname }} </h5>

		<p>{{ $ToComment->content }}</p>
		@endforeach
				<form action="{{ route('commenter') }}" method='POST' id='gg' enctype="multipart/form-data">
					{{csrf_field()}}
					<p><input placeholder="Commentaire" class="form-control center color-text" type='text' name='content' id='content' required></input></p>

					<button type="submit" class="btn link btn-dark" id="commente">Commenter</button>
				</form>
				
			</div>
			<div class="col-md-1">


			</div>

		@endforeach

	</div>
	<!-- if you are admin-->
	<?php 
		$user = Auth::user()->id_grade;
	?>
	@if($user == 3)
		<a href="/event"><button type="button" class="btn btn-light" id="createEvent" >
			Add event
		</button></a>
	@endif
</div>
@endsection
