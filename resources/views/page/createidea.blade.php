@extends('template')

@section('main')

<div class="container">
        <div class="row">
            <div class="col s6">
                <form action="{{ route('createIdea') }}" method='POST' id = 'form'>
                {{csrf_field()}}
                    <div class="col s6 push-s3">

										<input placeholder="Titre de l'idée" class="center color-text" type='text' name='title' id='title' required></input>
											<br>
										<input placeholder="Catégorie de l'idée" class="center color-text" type='text' name='category' id='category' required></input>
                        <div class="input-field">
                            <textarea placeholder="Décrire votre idée" style="font-size: 20px;" name='description' form='form' required></textarea>
                        </div>
                        <button class="waves-effect waves-light btn" type='submit'>Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
