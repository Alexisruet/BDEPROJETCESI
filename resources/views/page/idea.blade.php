
<h1>ffff</h1>

@foreach ($idea_boxes as $idea)
   <div class="displayprod">
       <!-- {{ $produit->name }} -->
        <div class="title"> {{ $idea_boxes->title }} </div>

        <!-- UrlImage : {{ $produit->urlImage}} <br> -->
        <div class="content">
            Description : {{ $idea_boxes->content }}
        </div>
    </div>
@endforeach
