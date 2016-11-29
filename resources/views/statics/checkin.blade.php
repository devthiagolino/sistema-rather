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

</div>
<!-- fim TITULO SECAO -->



<!-- === FORMULARIO === -->
<form>

	<h2>Fazer Check-In</h2>
	
	<div class="form-inline">
		<div class="form-group">
			<label for="data">Nome <em>*</em></label>
			<select name="nome" class="selectpicker" data-show-subtext="true" data-live-search="true" title="- Selecione -">
				<option>Jamerson Ramalho</option>
				<option>Thiago Lino</option>
				<option>Bruno Maia</option>
				<option>Carlinhos</option>
				<option>Guga</option>
				<option>Lucyan Peixoto</option>
				<option>Uziel Barbosa</option>
				<option>Geraldo Neves</option>
				<option data-subtext="Teste">Edivan Barbosa</option>
			</select>
		</div>
		<div class="form-group">
			<label for="data">Data <em>*</em></label>
			<input type="text" class="form-control" id="data" placeholder="20/02/2016">
		</div>
		<div class="form-group">
			<label for="horario_entrada">Horário da Entrada <em>*</em></label>
			<input type="text" class="form-control" id="horario_entrada" placeholder="08:00">
		</div>
	</div>


	<div class="botao_submit sem_margem">
		<button type="submit" class="btn btn-default">Confirmar Check-In</button>
	</div>

</form>
@stop