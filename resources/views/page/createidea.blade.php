@extends('template')

@section('main')
	<div class="contain-cIdea row" id="bodyCI">
		<div class="col-md-4">

		</div>
		<div class="col-md-3" id="yopLaBoum">
			<form class="" action="{{ route('createIdea') }}" method='POST' id = 'form'>
								{{csrf_field()}}
				<div class="" id="titreCI">
					<label for="title">Titre de votre idée :</label>
					<input placeholder="Titre de l'idée" class="form-control" type='text' name='title' id='title' required></input>
				</div>
					<div class="">
						<div class="input-field">
							<label for="exampleFormControlTextarea1" id="desCI">Description de votre idée :</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Décrire votre idée" name='description' form='form' required></textarea>
						</div>
						<button class="waves-effect waves-light btn" id="ideaValidate" type='submit'>Valider</button>
					</div>
		</form>
		</div>
	</div>
@endsection
