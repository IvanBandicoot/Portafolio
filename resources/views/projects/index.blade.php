@extends('layout')

@section('Title', __('Projects'))

@section('content')

<div class="container">
		
		<div class="d-flex justify-content-between align-items-center mb-3">
			
			<h1 class="display-4">Proyectos</h1>

			@auth

				@if(auth()->user()->hasRoles(['admin']))

					<h3>Bienvenido {{ auth()->user()->name }} {{ auth()->user()->last_name }}</h3>
					<a class="btn btn-primary mb-0" href="{{ route('projects.create') }}">
						Crear Proyecto
					</a>

				@endif
					<h3>Bienvenido {{ auth()->user()->name }} {{ auth()->user()->last_name }}</h3>

			@endauth

		</div>

		<p class="lead text-secondary">Proyectos realizados Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.</p>

	<ul class="list-group">
			
		@forelse ($project as $value)
		
			{{-- <li>{{ $value->title }} <br><small>{{ $value->description }} <br><pre>{{ $value->created_at->diffForHumans() }}</pre></small></li> --}}
			<li class="list-group-item border-0 mb-3 shadow-sm">
				<a class="text-secondary d-flex justify-content-between align-items-center" href="{{route('projects.show', $value)}}">
					
					<span class="font-weight-bold">
						{{ $value->title }}
					</span>

					<span class="text-black-50">
						{{ $value->created_at->format('d/m/Y') }}	
					</span>
				
				</a>
			</li>

		@empty

			<li class="list-group-item border-0 mb-3 shadow-sm">
				No hay proyectos para mostrar.
			</li>
		
		@endforelse

			{{ $project->links() }}

	</ul>

</div>

@endsection