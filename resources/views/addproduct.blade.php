@extends('template')

@section('main')

<div class="container">
        <div class="row">
            <div class="col s6">
                <form action="{{ route('addproduct') }}" method='POST' id = 'form' enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="col s6 push-s3">

										<input placeholder="Nom du produit" class="center color-text" type='text' name='name' id='name' required></input>
											<br>
                                            <div class="input-field">
                            <textarea placeholder="Description du produit" style="font-size: 20px;" name='description' form='form' required></textarea>
                        </div>
                        <input placeholder="Prix" class="center color-text" type='text' name='price' id='price' required></input>
                        <input placeholder="Stock" class="center color-text" type='text' name='stock' id='stock' required></input>
                        </div>
                        <div class="input-group control-group increment" >
          <input type="file" name="filename" class="form-control">
          
            
          </div>
                        




									
                        <button class="waves-effect waves-light btn" type='submit'>Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection