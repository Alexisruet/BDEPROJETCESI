<h1>Hello</h1>

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
