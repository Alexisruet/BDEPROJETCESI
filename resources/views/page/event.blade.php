@extends('template')

@section('main')

<div class="container">
    <h1 class="text-center">Hello</h1>
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
                    @foreach ($pictures as $pic)
                    <img src="{{ asset($pic->url) }}">
                    </div> 
            </div> 
            
        @endforeach
        @endforeach
    </div>
</div>
@endsection