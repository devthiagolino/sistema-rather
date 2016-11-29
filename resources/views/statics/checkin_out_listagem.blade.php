@extends('templates.app')
@section('content')
<!-- === TITULO SECAO === -->
<div class="titulo_secao">
	<h1>
		Check-In / Out 
	</h1>

	<!-- === BOTOES OPCOES === -->
	<div class="btn-group pull-right">
		<a href="{{ route('check.in') }}" class="btn btn-default">Check-In</a>
		<a href="{{ route('check.out') }}" class="btn btn-default">Check-Out</a>
		<a href="{{ route('check.index') }}" class="btn btn-default">Ver Todos</a>
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



<table class="table table-striped">
	<thead>
		<tr>
			<th><input type="checkbox" value=""></th>
			<th>
				<div class="input-group-btn">
					<button aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Data <span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li class="dropdown-header">Exibir apenas:</li>
						<li>
							<a href="#">Hoje</a>
						</li>
						<li>
							<a href="#">Esta semana</a>
						</li>
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
					<button aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Nome <span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li class="dropdown-header">Exibir apenas:</li>
						<li>
							<a href="#">Pessoas Presentes</a>
						</li>
						<li>
							<a href="#">Pessoas Ausentes</a>
						</li>
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
			<th>Check-In</th>
			<th>Check-Out</th>
			<th>Opções</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row"><input type="checkbox" value=""></th>
			<td><strong>27/02</strong></td>
			<td><a href="" title="Jamerson Ramalho">Jamerson Ramalho</a></td>
			<td><span class="label label-success">10:30 h</span></td>
			<td><span class="label label-danger">17:30 h</span></td>
			<td>
				<a href="" title="Editar" class="icone-editar"><span>Editar</span></a>
				<a href="" title="Excluir" class="icone-excluir"><span>Excluir</span></a>
			</td>
		</tr>
		<tr>
			<th scope="row"><input type="checkbox" value=""></th>
			<td><strong>27/02</strong></td>
			<td><a href="" title="Jamerson Ramalho">Diogo Moreira</a></td>
			<td><span class="label label-success">11:11 h</span></td>
			<td><span class="label label-danger">-</span></td>
			<td>
				<a href="" title="Editar" class="icone-editar"><span>Editar</span></a>
				<a href="" title="Excluir" class="icone-excluir"><span>Excluir</span></a>
			</td>
		</tr>
	</tbody>
</table>


<!-- === PAGINACAO === -->
<nav class="paginacao">
	<ul class="pager">
		<li><a href="#">ver mais</a></li>
	</ul>
</nav>
<!-- fim nav.PAGINACAO -->
@stop