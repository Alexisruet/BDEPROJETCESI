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
                    Description : {{ $event->content }}
                </div>
            </div> 
            <div>
            <form enctype="multipart/form-data" action="#" method="post">
                <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
                <input type="file" name="photo" accept="image/png, image/jpeg" size=50 />
                <input type="submit" value="Envoyer" />
                </div>
        @endforeach
    </div>
</div>
@endsection