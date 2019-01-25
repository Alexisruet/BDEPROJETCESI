@extends('template')

@section('main')
<div class="container" id="cIdea">
	<div class="row">
      <form class="col-md-12" action="{{ route('createIdea') }}" method='POST' id = 'form'>
                {{csrf_field()}}
      	<div class="col-md-5" id="titreCI">
					<label for="title">Titre de votre idée :</label>
					<input placeholder="Titre de l'idée" class="form-control" type='text' name='title' id='title' required></input>
				</div>
					<div class="col-md-5">
						<div class="input-field">
							<label for="exampleFormControlTextarea1" id="desCI">Description de votre idée :</label>
            	<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Décrire votre idée" name='description' form='form' required></textarea>
            </div>
            <button class="waves-effect waves-light btn" id="ideaValidate" type='submit'>Valider</button>
          </div>
    </form>

	</div>

</div>
	<img src="img/lumen.jpg" alt="des ampoules">
@endsection
