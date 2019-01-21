@extends('template')

@section('main')

<div class="container">
        <div class="row">
            <div class="col s6">
							@foreach ($idea_boxes as $idea)
								 <div>
											<div>
													Nom de l'association : {{ $idea->title }}
											</div>

											<div>
													Description : {{ $idea->content }}
											</div>
									</div>
							@endforeach
            </div>
        </div>
    </div>

@endsection
