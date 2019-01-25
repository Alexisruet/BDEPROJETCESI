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

                    <form action="{{ route('commenter') }}" method='POST' id = 'gg' enctype="multipart/form-data">
                {{csrf_field()}}
                <p><input placeholder="Commentaire" class="center color-text" type='text' name='comment' id='comment' required></input></p>
                <button type="submit"id="commente">Commenter</button>
                    </form>
                    </div> 
            </div>       
        @endforeach
    </div>
</div>
@endsection