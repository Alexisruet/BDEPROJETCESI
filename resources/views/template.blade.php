<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">
	<title>BDE du Cesi Bordeaux</title>
</head>
	<body>
		<header>
			<nav class="navbar fixed-top navbar-expand-md" id="navbar1">
				<div class="container">
					<a class="navbar-brand js-scroll-trigger" href="./index.html">
						<img src="img/logoCesi.png" alt="logo">
					</a>
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
						&#9776;
					</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#">Membres du BDE </a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#">Événements</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#">Boîte à idées </a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#">Boutique </a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#">Contact </a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<main>
			@yield('main')
		</main>


	<footer>
		@yield('footer')
	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
