<?php require_once "../app/helpers.php";?>
<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">

	<div class="container">
		
		<a class="navbar-brand btn btn-primary" href="{{ route('home') }}">
			HRM
		</a>
	
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
	        <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse" id="navbarSupportedContent">

			<ul class="nav nav-pills"><!--request()->routeIs('nombreRuta') devuelve el nombre de la ruta en la que estamos, 1 o 0-->
																<!--el lang o __() traduce las palabras de ingles a espa☺ol en el archivo es.json que creamos-->
				<li class="nav-item">
					<a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">
						@lang('Home')
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">
						@lang('About')
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ setActive('galery') }}" href="{{ route('galery') }}">
						{{ __('Galery') }}
					</a>
				</li>
	 			<li class="nav-item">
					<a class="nav-link {{ setActive('projects.*') }}" href="{{ route('projects.index') }}">
						{{ __('Projects') }}
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">
						{{ __('Contact') }}
					</a>
				</li>

			{{-- Preguntamos si el invitado esta logueado --}}
				@guest
					<li class="nav-item">
						<a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">
							Login
						</a>
					</li>
				@else
					<li class="nav-item">
						<a class="nav-link {{ setActive('logout') }}" href="#" onclick="event.preventDefault();
		             	document.getElementById('logout-form').submit();"
		                >
		                	Cerrar Sesion
		            	</a>
		            </li>
				@endguest
			</ul>

		</div>
		
	</div>

</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
