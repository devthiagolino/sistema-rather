@extends('templates.auth')

@section('content')

<form action="{{ route('auth.authenticate') }}" method="post" class="formulario-login">
	{!! csrf_field() !!}
	<div class="row">
		<div class="col-md-offset-4 col-md-4">
			<div class="well">

				@if (count($errors) > 0)
				<div class="alert alert-warning">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif	

				@if(session()->has('error'))
					<div class="alert alert-danger">
						<p>{{session()->get('error')}}</p>
					</div>
				@endif

				<div class="form-group">
					<label for="email">Usuário</label>
					<input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
				</div>
				<div class="form-group">
					<label for="password">Senha</label>
					<input type="password" class="form-control" id="password" placeholder="******" name="password">
				</div>
				<button type="submit" class="btn btn-primary">Acessar</button>
			</div>
		</div>
	</div>

</form>

@endsection