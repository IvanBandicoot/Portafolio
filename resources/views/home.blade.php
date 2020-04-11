@extends('layout')

@section('Title', __('Home'))

@section('content')

{{-- header --}}

	<div class="container">

		<div class="row">
			
			<div class="col-12 col-lg-6">
					
				<h1 class="display-4 text-primary">Desarrollo Web.</h1>

				<p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href="{{ route('contact') }}" class="btn btn-lg btn-block btn-primary">Contactame</a>
			</div>

			<div class="col-12 col-lg-6">
				<img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrollo web">
			</div>

		</div>

		<hr>

	</div>

	<div class="container">
		

		<div class="features offset">
		
			<div class="row text-center py-4 justify-content-center">
				<div class="col-12 col-md-10 col-lg-9">
					<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor.</h1>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
					<a href="{{ route('contact') }}" class="btn btn-primary btn-sm">Request A Quote</a>
					<a href="{{ route('projects.index') }}" class="btn border border-primary btn-sm">See Our Portfolio</a>
				</div>
			</div>

		</div>

	 	<div class="jumbotron m-0 py-4 bg-primary">

			<div class="col-12">
				<h3 class="heading text-center mb-4 text-light text-uppercase">Caracteristicas</h3>
			</div>

			<div class="container">
				<div class="row text-center px-lg-4 px-xl-5">

					<div class="col-sm-6 col-md-4 os-animation" data-animation="fadeInLeft">
						<div class="feature px-2">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x text-light"></i>
								<i class="fas fa-mobile-alt fa-stack-1x fa-inverse text-primary"></i>
							</span>
							<h3 class="text-light">Mobile Friendly</h3>
							<p class="lead text-light">Nuno features a mobie friendly, responsive first website layout using Bootstrap.</p>
						</div>
					</div>

					<div class="col-sm-6 col-md-4 os-animation" data-animation="fadeInUp">
						<div class="feature px-2">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x text-light"></i>
								<i class="fas fa-desktop fa-stack-1x fa-inverse text-primary" data-fa-transform="shrink-1"></i>
							</span>
							<h3 class="text-light">Full Screen Landing</h3>
							<p class="lead text-light">Using Bootstrap, the Nuno theme features a full screen carousel landing page.</p>
						</div>
					</div>

					<div class="col-sm-6 col-md-4 os-animation" data-animation="fadeInRight">
						<div class="feature px-2">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x text-light"></i>
								<i class="fas fa-play fa-stack-1x fa-inverse text-primary" data-fa-transform="shrink-3.5 right-1"></i>
							</span>
							<h3 class="text-light">Custom Animation</h3>
							<p class="lead text-light">Animate.css and Waypoints.js allow for smooth animations scrolling down the site.</p>
						</div>
					</div>

					<div class="col-sm-6 col-md-4 os-animation" data-animation="fadeInLeft">
						<div class="feature px-2">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x text-light"></i>
								<i class="fas fa-angle-double-down fa-stack-1x fa-inverse text-primary"></i>
							</span>
							<h3 class="text-light">Parallax Scrolling</h3>
							<p class="lead text-light">Fixed background images allow the theme to have content-filled parallax scrolling sections.</p>
						</div>
					</div>

					<div class="col-sm-6 col-md-4 os-animation" data-animation="fadeInUp">
							<div class="feature px-2">
								<span class="fa-stack fa-2x">
									<i class="fas fa-circle fa-stack-2x text-light"></i>
									<i class="fas fa-sliders-h fa-stack-1x fa-inverse text-primary" data-fa-transform="shrink-1"></i>
								</span>
								<h3 class="text-light">Content Slider</h3>
								<p class="lead text-light">Owl.Carousel.js makes navigating content sliders seamless with it's content carousel navigation.</p>
							</div>
						</div>

						<div class="col-sm-6 col-md-4 os-animation" data-animation="fadeInRight">
							<div class="feature px-2">
								<span class="fa-stack fa-2x">
									<i class="fas fa-circle fa-stack-2x text-light"></i>
									<i class="fab fa-wpforms fa-stack-1x fa-inverse text-primary"></i>
								</span>
								<h3 class="text-light">Contact Form</h3>
								<p class="lead text-light">The Bootsrap HTML form will send directly to your email address using PHPMailer.php.</p>
							</div>
						</div>

					</div>
				</div>
		</div>

	</div>

@endsection