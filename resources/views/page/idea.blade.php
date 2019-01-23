@extends('template')

@section('main')

<div class="container">
        <div class="row">
            <div class="col s6">
					@foreach ($ideas as $idea)
								 <div>
											<div>
													Nom de l'association : {{ $idea->title }}
											</div>

											<div>
													Description : {{ $idea->description }}
											</div>
									</div>
					@endforeach
            </div>
        </div>
    </div>

@endsection
