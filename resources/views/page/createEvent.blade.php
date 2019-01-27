@extends('template')

@section('main')
		<div class="contain-cIdea row" id="bodyCI">
			<div class="col-md-4">

			</div>
			<div class="col-md-4" id="yopLaBoum">
				<form class="" action="{{ route('createEvent') }}" method='POST' id = "form" enctype="multipart/form-data">
									{{csrf_field()}}
					<div class="" id="titreCI">
						<label for="title">Titre de l'événement :</label>
						<input placeholder="Titre de l'événement" class="form-control" type='text' name='title' id='title' required></input>
					</div>
						<div class="">
							<div class="input-field">
								<label for="exampleFormControlTextarea1" class="desCI">Description de l'événement :</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Décrire votre idée" name='description' form='form' required></textarea>
							</div>
							<div class="input-group control-group increment">
								<label for="fichier" class="desCI" id="addPic">Ajouter une image :</label>

								<input type="file" name="filename" class="form-control" id="fichier"></input>
							</div>
							<button class="waves-effect waves-light btn" id="ideaValidate" type='submit'>Valider</button>
						</div>
			</form>
			</div>
		</div>

@endsection
