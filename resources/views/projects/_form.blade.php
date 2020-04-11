	@csrf

	<div class="form-group">
		
		<label for="titulo">Titulo del Proyecto</label>
		<input id="project" class="form-control border-0 bg-light shadow-sm"
		type="text" name="title" value="{{ old('title', $project->title) }}">

	</div>

	<div class="form-group">
		
		<label for="url">Url del proyecto</label>
		<input id="url" class="form-control border-0 bg-light shadow-sm"
		type="text" name="url" value="{{ old('url', $project->url) }}">

	</div>

	<div class="form-group">
		<label for="description">Descripcion Del Proyecto</label>
		<textarea id="description" class="form-control border-0 bg-light shadow-sm"
				name="description">{{ old('description', $project->description) }}</textarea>
	</div>

	<div class="form-group">
		<button class="btn btn-primary btn-lg btn-block">Guardar</button>
	</div>

	<a class="btn btn-link btn-block" href="{{ route('projects.index') }}">Cancelar</a>