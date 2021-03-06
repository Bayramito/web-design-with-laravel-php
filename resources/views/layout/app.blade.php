<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{config('app.name', 'Theme')}}</title>

	<!-- Fonts -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- Style -->
	<link rel="stylesheet" href="css/app.css">

</head>

<body>
<div id="app">
	<!-- Navbar -->
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a href="" class="navbar-brand">
				<img src="/images/logo.png" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div id="navbarResponsive" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a href="" class="nav-link">Home</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link">About</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link">Services</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link">Products</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link">Catalogue</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	@yield('content')

<!-- FOOTER -->
	<footer>
		<div class="container-fluid padding">
			<div class="row text-center">
				<div class="col-md-4">
					<img src="/images/logo.png" alt="">
					<hr class="light">
					<p>555-555-555</p>
					<p>britneylover40@gmail.com</p>
					<p>street</p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<p>555-555-555</p>
					<hr class="light">
					<p>britneylover40@gmail.com</p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<p>555-555-555</p>
					<p>britneylover40@gmail.com</p>
					<p>street</p>
				</div>
				<div class="col-12">
					<hr class="light">
					<h5>&copy;bayramarif.dev</h5>
				</div>
			</div>
		</div>
	</footer>
</div>
</body>

</html>