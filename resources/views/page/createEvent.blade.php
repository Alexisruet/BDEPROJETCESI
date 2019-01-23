@extends('template')

@section('main')

<div class="container">
        <div class="row">
            <div class="col s6">
                <form action="{{ route('createEvent') }}" method='POST' id = 'form' enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="col s6 push-s3">
                    <p><input placeholder="Titre de l'événement" class="center color-text" type='text' name='title' id='title' required></input></p>
                        <div class="input-field">
                            <textarea placeholder="Décrire l'événement" style="font-size: 20px;" name='description' form='form' required></textarea>
                        </div>
                        
                        <div class="input-group control-group increment" >
          <input type="file" name="filename" class="form-control">
          <div class="input-group-btn"> 
            
          </div>
        </div>
        <button class="waves-effect waves-light btn" type='submit'>Valider</button>
        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection