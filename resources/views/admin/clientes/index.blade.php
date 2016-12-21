@extends('admin.templates.app')

@section('content')

<!-- === TITULO SECAO === -->
<div class="titulo_secao">
	<h1>
		Clientes 
	</h1>

	<!-- === BOTOES OPCOES === -->
	<div class="btn-group pull-right">
		<a href="{{ route('admin.clientes.create') }}" class="btn btn-default">Novo Cliente</a>
		<a href="{{ route('admin.clientes.index') }}" class="btn btn-default">Ver Todos</a>
	</div>
	<!-- fim BOTOES OPCOES -->

	<!-- === BUSCA === -->
	<div class="busca input-group">
		<input type="text" class="form-control" placeholder="Buscar por...">
		<span class="input-group-btn">
			<button class="btn btn-default" type="button">
				<span class="icone-buscar" aria-hidden="true"></span>
			</button>
		</span>
	</div>
	<!-- fim BUSCA -->

</div>
<!-- fim TITULO SECAO -->


<!-- === BOTOES OPCOES === -->
<div class="botoes_opcoes btn-group">
	<button type="button" class="btn btn-danger icone-excluir"> Excluir</button>
</div>
<!-- fim BOTOES OPCOES -->

@if(session()->has('sucesso'))
	<div class="alert success">
		<p>{{session()->get('sucesso')}}</p>
	</div>
@endif

@if(session()->has('erro'))
	<div class="alert danger">
		<p>{{session()->get('erro')}}</p>
	</div>
@endif

<table class="table table-striped">
	<thead>
		<tr>
			<th><input type="checkbox" value=""></th>
			<th>
				<div class="input-group-btn">
					<button aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Nome <span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li class="dropdown-header">Ordenar por:</li>
						<li>
							<a href="#">Ordem Crescente</a>
						</li>
						<li>
							<a href="#">Ordem Decrescente</a>
						</li>
					</ul>
				</div>
			</th>
			<th>
				<div class="input-group-btn">
					<button aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Tipo <span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li>
							<a href="#">Pessoa Física</a>
						</li>
						<li>
							<a href="#">Pessoa Jurídica</a>
						</li>
					</ul>
				</div>
			</th>
			<th>
				<div class="input-group-btn">
					<button aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Plano <span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li>
							<a href="#">Estação de Trabalho</a>
						</li>
						<li>
							<a href="#">Sala Privativa</a>
						</li>
						<li>
							<a href="#">Sala de Reunião</a>
						</li>
						<li>
							<a href="#">Sala de Treinamento</a>
						</li>
					</ul>
				</div>
			</th>
			<th>
				<div class="input-group-btn">
					<button aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Vínculo <span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li class="dropdown-header">Ordenar por:</li>
						<li>
							<a href="#">Ordem Crescente</a>
						</li>
						<li>
							<a href="#">Ordem Decrescente</a>
						</li>
					</ul>
				</div>
			</th>
			<th>
				<div class="input-group-btn">
					<button aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Status <span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li>
							<a href="#">Ativo</a>
						</li>
						<li>
							<a href="#">Inativo</a>
						</li>
					</ul>
				</div>
			</th>
			<th>Opções</th>
		</tr>
	</thead>
	<tbody>
		@if(count($clientes))
			@foreach($clientes as $cliente)
			<tr>
				<th scope="row"><input type="checkbox" value=""></th>
				<td>
					@if($cliente->getTipoCliente() == 'PF')
					<a href="{{ route('admin.clientes.edit', [$cliente->id]) }}">
						<strong>{{ $cliente->getCliente()->nome }}</strong>
					</a>
					@else
					<a href="{{ route('admin.clientes.edit', [$cliente->id]) }}">
						<strong>{{ $cliente->getCliente()->razao_social }}</strong>
					</a>
					@endif
				</td>
				<td>{{ $cliente->getCliente()->getTitulo() }}</td>
				<td>{{ $cliente->plano }}</td>
				<td>
					@if($cliente->getVinculo)
					<a href="{{ route('admin.clientes.edit', [$cliente->id]) }}">
						@if($cliente->getVinculo->getTipoCliente() == 'PF')
							<strong>{{ $cliente->getVinculo->getCliente()->nome }}</strong>
						@else
							<strong>{{ $cliente->getVinculo->getCliente()->razao_social }}</strong>
						@endif
					</a>
					@endif
				</td>
				<td>
				@if($cliente->getAtivo())
				<span class="label label-success">Ativo</span>
				@else
				<span class="label label-warning">Inativo</span>
				@endif
				</td>
				<td>
					<a href="{{ route('admin.clientes.edit', [$cliente->id]) }}" title="Editar" class="icone-editar"><span>Editar</span></a>
					<form method="post" action="{{ route('admin.clientes.delete', [$cliente->id]) }}">
						{!! csrf_field() !!}
						<input type="hidden" name="_method" value="delete">
						<button class="icone-excluir"><span>Excluir</span></</button>
					</form>
				</td>
			</tr>
			@endforeach
		@endif
	</tbody>
</table>


<!-- === PAGINACAO === -->
<nav class="paginacao">
	{!! $clientes->render() !!}
</nav>
<!-- fim nav.PAGINACAO -->

@stop