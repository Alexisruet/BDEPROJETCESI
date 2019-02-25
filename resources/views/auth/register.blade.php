@extends('template')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="register">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" name="formRegister" onsubmit="return Validation()">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control{{ $errors->has('nsurnameame') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>

                                @if ($errors->has('surname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="centre" class="col-md-4 col-form-label text-md-right">{{ __('Centre') }}</label>

                            <div class="col-md-6">
                                <select name="centre" class="form-control">
                                    <option value="1">Aix-en-Provence</option>
                                    <option value="2">Angoulême</option>
                                    <option value="3">Arras</option>
                                    <option value="4">Bordeaux</option>
																		<option value="5">Brest</option>
																		<option value="6">Caen</option>
																		<option value="7">Châteauroux</option>
																		<option value="8">Dijon</option>
																		<option value="9">Grenoble</option>
																		<option value="10">La Rochelle</option>
																		<option value="11">Le Mans</option>
																		<option value="12">Lille</option>
																		<option value="13">Lyon</option>
																		<option value="14">Montpellier</option>
																		<option value="15">Nancy</option>
																		<option value="16">Nantes</option>
																		<option value="17">Nice</option>
																		<option value="18">Orléans</option>
																		<option value="19">Paris Nanterre</option>
																		<option value="20">Pau</option>
																		<option value="21">Reims</option>
																		<option value="22">Rouen</option>
																		<option value="23">Saint-Nazaire</option>
																		<option value="24">Strasbourg</option>
																		<option value="25">Toulouse</option>


                                </select>

                                @if ($errors->has('centre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('centre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-2 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __("S'inscrire") }}
                                </button>
                            </div>
														<div class="col-md-4">
																<label class="custom-control custom-checkbox">
																	<input class="custon-control-input" type="checkbox" name="lgl" value="accepted" required>
																	<span class="custom-control-indicator"></span>
																	<span class="custom-control-description">J'accepte les <a href="mentionslgl">Conditions générales d'utilisation</a></span>
																</label>
														</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
