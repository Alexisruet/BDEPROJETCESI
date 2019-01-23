<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/stylecs.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
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
					<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
						<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link js-scroll-trigger" href="event">ÉVÉNEMENTS</a>
								</li>
								<li class="nav-item">
									<a class="nav-link js-scroll-trigger" href="idea">BOÎTE À IDÉES </a>
								</li>
								<li class="nav-item">
									<a class="nav-link js-scroll-trigger" href="shop" id="item1" >BOUTIQUE </a>
								</li>
								<li class="nav-item">
									<p class="nav-link js-scroll-trigger" href="">&nbsp</p>
								</li>

							@guest
									<li class="nav-item">
											<a class="nav-link" href="{{ route('login') }}">SE CONNECTER</a>
									</li>
									@if (Route::has('register'))
											<li class="nav-item">
													<a class="nav-link" href="{{ route('register') }}">S'INSCRIRE</a>
											</li>
											<li class="nav-item">
												<p class="nav-link js-scroll-trigger" href="">&nbsp</p>
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
			</nav>
		</header>
		<main>
				@yield('main')
		</main>

			<!-- Footer -->
	<footer class="page-footer font-small blue pt-4">

		<!-- Footer Links -->
		<div class="container-fluid text-center">

			<!-- Grid row -->
			<div class="row">

				<!-- Grid column -->
				<div class="col-md-4 mb-md-0 md-4">
					<div class="container" id="logos">
						<!-- Content -->
						<h5 class="text-uppercase">A propos</h5>
						<a href="https://www.facebook.com/bde.cesibordeaux.9" id="logoFacebook"> <i class="fab fa-facebook fa-4x">  </i> </a>
						<a href="https://www.instagram.com/bde_cesi_bdx/" id="logoInsta"> <i class="fab fa-instagram fa-4x">  </i> </a>
						<a href="https://twitter.com/BdeCesiBordeaux" id="logoTwitter"> <i class="fab fa-twitter fa-4x">  </i> </a>

					</div>

				</div>
				<!-- Grid column -->

				<hr class="clearfix w-100 d-md-none pb-3">

				<!-- Grid column -->
				<div class="col-md-4 mb-md-0 md-4">

						<!-- Links -->
						<h5 class="text-uppercase"  id="TitleFooter">Contact</h5>

						<ul class="list-unstyled">
							<li>
								<a href="#!">Link 1</a>
							</li>
							<li>
								<a href="#!">Link 2</a>
							</li>
						</ul>

					</div>
					<!-- Grid column -->

					<!-- Grid column -->
					<div class="col-md-4 mb-md-0 md-4">

						<!-- Links -->
						<h5 class="text-uppercase" id="TitleFooter" href="/page/mentionslgl">Mentions légales</h5>

						<ul class="list-unstyled">
							<li>
								<a href="#!">RGPD</a>
							</li>
							<li>
								<a href="#!">Conditions générales</a>
							</li>
							<li>
								<a href="#!">Conditions de vente</a>
							</li>

						</ul>
					</div>
					<!-- Grid column -->
			</div>
			<!-- Grid row -->
		</div>
		<!-- Footer Links -->

		<!-- Copyright -->
		<div class="footer-copyright text-center py-3">© 2018 Copyright :
			<a href="https://malom.fr"> Malom.fr</a>
		</div>
		<!-- Copyright -->

	</footer>
	<!-- Footer -->

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
