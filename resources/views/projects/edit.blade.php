@extends('layout')

@section('Title', 'Editar Proyecto | '. $project->title)

@section('content')

	<div class="container">
	
	<div class="row">
			
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">

			@include('partials.validation-error')

			<form class="bg-white py-3 px-4 shadow rounded" method="post" action="{{ route('projects.update', $project) }}">
				@method('PATCH')
				<h1 class="display-4">Editar Proyecto</h1>
				<hr>
				@include('projects._form')

			</form>
		</div>

	</div>

</div>

@endsection