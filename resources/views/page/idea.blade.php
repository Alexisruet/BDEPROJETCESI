@extends('template')

@section('main')

<div class="container">
    <h1 class="text-center">Hello</h1>
    <div class="row espace">

        @foreach ($idea_boxes as $idea)
        <div class="idea">
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
@endsection