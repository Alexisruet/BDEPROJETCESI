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
                <form name="comment" method="POST">
  Commenter<br>
  <input type="text" name="commenter">
  <br>
  <br><br>
  <input type="submit" value="Submit">
</form> 
            </div> 
            
        @endforeach
    </div>
</div>
@endsection