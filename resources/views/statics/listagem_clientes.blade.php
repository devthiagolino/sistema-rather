@extends('templates.app')

@section('content')

<!-- === TITULO SECAO === -->
<div class="titulo_secao">
	<h1>
		Clientes 
	</h1>

	<!-- === BOTOES OPCOES === -->
	<div class="btn-group pull-right">
		<a href="{{ route('clientes.create') }}" class="btn btn-default">Novo Cliente</a>
		<a href="{{ route('clientes.index') }}" class="btn btn-default">Ver Todos</a>
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
		<tr>
			<th scope="row"><input type="checkbox" value=""></th>
			<td>
				<a href="">
					<strong>Bruno Maia</strong>
				</a>
			</td>
			<td>Pessoa Física</td>
			<td>Estação de Trabalho</td>
			<td>
				<a href="">
					<strong>Locadados LTDA</strong>
				</a>
			</td>
			<td><span class="label label-success">Ativo</span></td>
			<td>
				<a href="" title="Editar" class="icone-editar"><span>Editar</span></a>
				<a href="" title="Excluir" class="icone-excluir"><span>Excluir</span></a>
			</td>
		</tr>
		<tr>
			<th scope="row"><input type="checkbox" value=""></th>
			<td>
				<a href="">
					<strong>Jamerson Ramalho</strong>
				</a>
			</td>
			<td>Pessoa Física</td>
			<td>Estação de Trabalho</td>
			<td>-</td>
			<td><span class="label label-success">Ativo</span></td>
			<td>
				<a href="" title="Editar" class="icone-editar"><span>Editar</span></a>
				<a href="" title="Excluir" class="icone-excluir"><span>Excluir</span></a>
			</td>
		</tr>
		<tr>
			<th scope="row"><input type="checkbox" value=""></th>
			<td>
				<a href="">
					<strong>Locadados LTDA</strong>
				</a>
			</td>
			<td>Pessoa Jurídica</td>
			<td>-</td>
			<td>-</td>
			<td><span class="label label-success">Ativo</span></td>
			<td>
				<a href="" title="Editar" class="icone-editar"><span>Editar</span></a>
				<a href="" title="Excluir" class="icone-excluir"><span>Excluir</span></a>
			</td>
		</tr>
		<tr>
			<th scope="row"><input type="checkbox" value=""></th>
			<td>
				<a href="">
					<strong>BlueBell</strong>
				</a>
			</td>
			<td>Pessoa Jurídica</td>
			<td>-</td>
			<td>-</td>
			<td><span class="label label-danger">Inativo</span></td>
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