<!DOCTYPE html>
<html>
<head>
	<title>@yield('Title', 'Ivan')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
	<script src="{{ mix('js/app.js') }}" defer></script>
	<script src="/js/app2.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<!-- Animate.css https://cdnjs.com/libraries/animate.css/
		https://daneden.github.io/animate.css/ -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<!-- Lightbox Image Gallery https://cdnjs.com/libraries/lightbox2  https://lokeshdhakar.com/projects/lightbox2/ -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">
	<!-- Owl Carousel https://cdnjs.com/libraries/OwlCarousel2
		http://owlcarousel2.github.io/OwlCarousel2/ -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<!-- jQuery https://code.jquery.com/ -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<!-- Bootstrap JS https://getbootstrap.com/docs/4.3/getting-started/introduction/ -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

	<div id="app" class="d-flex flex-column h-screen justify-content-between">
		
		<header>
			@include('partials.nav')
			@include('partials.session-start')
		</header>

		<main class="py-5">
			
			@yield('content')

		</main>

		<footer class="bg-primary text-center text-white py-30 shadow">
			
			HRM | Copyright @ {{ date('Y') }}

		</footer>

	</div>
	
	<!-- Waypoints https://cdnjs.com/libraries/waypoints
		https://github.com/imakewebthings/waypoints -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<!-- Font Awesome https://fontawesome.com/  https://use.fontawesome.com/releases/v5.13.0/js/all.js -->
	<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>
	<!-- Lightbox Image Gallery https://cdnjs.com/libraries/lightbox2  https://lokeshdhakar.com/projects/lightbox2/ -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>
	<!-- Owl Carousel https://cdnjs.com/libraries/OwlCarousel2
		http://owlcarousel2.github.io/OwlCarousel2/ -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<!-- jQuery CounterUp https://www.jsdelivr.com/package/npm/jquery.counterup
		https://github.com/bfintal/Counter-Up2 -->
	<script src="https://cdn.jsdelivr.net/npm/jquery.counterup@2.1.0/jquery.counterup.min.js"></script>
	<!-- Bootstrap Form Validator https://cdnjs.com/libraries/1000hz-bootstrap-validator -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
	
	<!-- End of Script Source Files -->

</body>
</html>