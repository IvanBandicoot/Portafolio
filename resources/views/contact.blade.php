@extends('layout')

@section('Title', __('Contact'))

@section('content')

	<div class="container">
		
		<div class="row">
			
			<div class="col-12 col-lg-6">
				<img class="img-fluid mb-4" src="/img/contact.svg" alt="Contacto desarrollo web">
			</div>
				
				<div class="col-12 col-sm-10 col-lg-6 mx-auto">
					
					<form class="bg-primary shadow rounded py-3 px-4" method="post" action="{{ route('messages.store') }}">
						
						@csrf

						<h1 class="display-4 text-light">{{ __('Contact') }}</h1>

						<div class="form-group">
							<label for="name" class="text-light">Nombre</label>
							<input id="name" class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror" type="text" name="name" placeholder="Nombre..." value="{{ old('name') }}">
							
							@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}}</strong>
								</span>
							@enderror

							<label for="email" class="text-light">Email</label>
							<input id="email" class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" type="text" name="email" placeholder="Email..." value="{{ old('email') }}">

							@error('email')

								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>

							@enderror

							<label for="asunto" class="text-light">Asunto</label>
							<input id="asunto" class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror" type="text" name="subject" placeholder="Asunto..." value="{{ old('subject') }}">

							@error('subject')

								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>

							@enderror

							<label for="content" class="text-light">Mensaje</label>
							<textarea id="content" class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror" name="content" placeholder="Mensaje...">{{ old('content') }}</textarea>

							@error('content')

								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>

							@enderror

							<button class="btn btn-light btn-lg btn-block mt-3">@lang('Send')</button>

						</div>

					</form>

				</div>

		</div>

	</div>

@endsection