<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet' type='text/css'>
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link rel="icon" type="image" href="img/logo_top.png">

	<script src="{{ asset('js/app.js') }}" defer></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta charset="utf-8">

	<title>BDE du Cesi Bordeaux</title>

</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-md" id="navbar1">
				<a class="navbar-brand js-scroll-trigger" href="/">
					<img src="img/lillogo_swag.png" alt="logo">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
					&#9776;
				</button>
				<div class="container">
					<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="http://localhost/laravel/BDE-CESI-BDX/public/bdemembers">Membres du BDE </a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="http://localhost/laravel/BDE-CESI-BDX/public/events">Événements</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="http://localhost/laravel/BDE-CESI-BDX/public/idea">Boîte à idées </a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="http://localhost/laravel/BDE-CESI-BDX/public/shop">Boutique </a>
							</li>
							<li class="nav-item">
								<p class="nav-link js-scroll-trigger" href="">&nbsp &nbsp &nbsp &nbsp</p>
							</li>

							@guest
									<li class="nav-item">
											<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
									</li>
									@if (Route::has('register'))
											<li class="nav-item">
													<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
											</li>
									@endif
							@else
									<li class="nav-item dropdown">
											<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
													{{ Auth::user()->name }} <span class="caret"></span>
											</a>

											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
													<a class="dropdown-item" href="{{ route('logout') }}"
														 onclick="event.preventDefault();
																					 document.getElementById('logout-form').submit();">
															{{ __('Logout') }}
													</a>

													<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
															@csrf
													</form>
											</div>
									</li>
							@endguest

						</ul>
					</div>
				</div>
			</nav>
		</header>

		<main>
			@yield('main')
		</main>


	<footer  class="row">
		<div class="col-lg-12">
				<nav class="navbar navbar-expand-lg navbar-dark" id="navbar2">
					<div class="container justify-content-center">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse justify-content-center navbar-collapse" id="navbarTogglerDemo03">
						<ul class="navbar-nav flex-column mr-auto mt-2 mt-lg-0 col-md-4">
							<li class="nav-item  active">
								<a class="nav-link foot-link" href="../html/financement.html">Contact <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link foot-link itemFoot" href="../html/financement.html">Numéro <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link foot-link itemFoot" href="../html/financement.html">Adresse <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link foot-link itemFoot" href="../html/financement.html">E-Mail <span class="sr-only">(current)</span></a>
							</li>
						</ul>
						<ul class="navbar-nav flex-column mr-auto mt-2 mt-lg-0 col-md-4">
							<li class="nav-item active">
								<a class="nav-link foot-link" href="../html/financement.html">Mentions Légales<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link itemFoot foot-link" href="../html/financement.html">Conditions de vente <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link itemFoot foot-link" href="../html/financement.html">Conditions d'utilisation <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link itemFoot foot-link" href="../html/financement.html">RGPD<span class="sr-only">(current)</span></a>
							</li>
						</ul>
						<ul class="navbar-nav flex-column mr-auto mt-2 mt-lg-0 col-md-4">
							<li class="nav-item active">
								<a class="nav-link foot-link" href="../html/financement.html">Contact <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link itemFoot foot-link" href="../html/financement.html">Numéro <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link itemFoot foot-link" href="../html/financement.html">Adresse <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link itemFoot foot-link" href="../html/financement.html">E-Mail <span class="sr-only">(current)</span></a>
							</li>
						</ul>
					</div>
					</div>
				</nav>
			</div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
