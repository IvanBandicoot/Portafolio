@extends('layout')

@section('Title', __('Who I am'))

@section('content')

	<div class="container">
		<div class="row">

				<div class="col-12 col-lg-6">
					<img class="img-fluid mb-4" src="/img/about.svg" alt="Quien_soy">
				</div>
				
				<div class="col-12 col-lg-6">
					<h1 class="display-4 text-primary">Quien soy?</h1>

					<p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<a class="btn btn-lg btn-block btn-primary" href="{{ route('projects.index') }}">Proyectos</a>

			</div>

		</div>
	</div>

@endsection