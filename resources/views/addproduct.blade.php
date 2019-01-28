
@extends('template')

@section('main')
	<div class="contain-cIdea row" id="bodyCI">
		<div class="col-md-4">

		</div>
		<div class="col-md-3 col s6 push-s3" id="yopLaBoum">
			<form action="{{ route('addproduct') }}" method='POST' id = 'form'  enctype="multipart/form-data">
								{{csrf_field()}}
				<div id="titreCI">
					<label for="title">Nom du produit :</label>
					<input class="form-control" type='text' name='name' id='name' required></input>
				</div>
				<div >
					<div class="input-field">
						<label for="exampleFormControlTextarea1" class="desCI" >Description du produit :</label>
						<textarea class="form-control" id="exampleFormControlTextarea1"  name='description' form='form' required></textarea>
					</div>
				</div>
        <div class="row">
          <div class="col-md-4" id="titreCI">
            <label for="title">Prix :</label>
            <input class="form-control" type='text' name='price' id='price' required></input>
          </div>
          <div class="col-md-2" id="titreCI"></div>
          <div class="col-md-4" id="titreCI">
            <label for="title">Stock :</label>
            <input class="form-control" type='text' name='stock' id='stock' required></input>
          </div>
        </div>
          <input type="file" name="filename">
      	<button class="waves-effect waves-light btn" id="ideaValidate" type='submit'>Valider</button>
		</form>
		</div>
	</div>
@endsection
