@extends('admin.templates.app')
@section('content')
<!-- === TITULO SECAO === -->
<div class="titulo_secao">
	<h1>
		Editar Cliente 
	</h1>

	<!-- === BOTOES OPCOES === -->
	<div class="btn-group pull-right">
		<a href="{{ route('admin.clientes.index')}}" class="btn btn-default">Ver Todos</a>
	</div>
	<!-- fim BOTOES OPCOES -->

</div>
<!-- fim TITULO SECAO -->



<!-- === FORMULARIO === -->
<form action="{{ route('admin.clientes.update', [$cliente->id]) }}" enctype="multipart/form-data" method="post" id="cadastrar-cliente">

<input type="hidden" name="_method" value="put">

	@if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	@if(session()->has('erro'))
		<div class="alert alert-danger">
			<p>{{ session()->get('erro') }}</p>
		</div>
	@endif

	<div class="output"></div>

	{!! csrf_field() !!}

	<h2>Tipo do Cliente</h2>

	<div class="form-inline">
		<div class="form-group">
			<!-- <label for="tipo_cliente">Tipo do Cliente<em>*</em></label> -->
			<select class="form-control selectpicker" id="tipo_cliente" name="tipo_cliente" data-acao="editar">
				<option value="">Selecione</option>
				<option value="pf" {{ $cliente->getTipoCliente() == 'PF' ? 'selected' : '' }}>Pessoa Física</option>
				<option value="pj" {{ $cliente->getTipoCliente() == 'PJ' ? 'selected' : '' }}>Pessoa Jurídica</option>
			</select>
		</div>
	</div>

	<!-- alterna conforme o tipo de cliente selecionado -->
	<div class="envolve-tipo-de-cliente">
		@if($cliente->getTipoCliente() == 'PJ')
			@include('admin.clientes.partials.formPJ', ['item' => $cliente])
		@else
			@include('admin.clientes.partials.formPF', ['item' => $cliente])
		@endif
	</div>

	<h2>Endereço</h2>

	<div class="form-inline">
		<div class="form-group">
			<label for="cep">CEP<em>*</em></label>
			<input type="text" class="form-control" id="cep" placeholder="00000-000" name="cep" value="{{ $cliente->cep }}">
		</div>
		<div class="form-group">
			<label for="endereco">Endereço<em>*</em></label>
			<input type="text" class="form-control" id="endereco" placeholder="Rua / Avenida / Rodovia" name="endereco" value="{{ $cliente->endereco }}">
		</div>
		<div class="form-group">
			<label for="numero">Nº<em>*</em></label>
			<input type="text" class="form-control" id="numero" placeholder="Número do Imóvel" name="end_numero" value="{{ $cliente->end_numero }}">
		</div>
		<div class="form-group">
			<label for="complemento">Complemento</label>
			<input type="text" class="form-control" id="complemento" placeholder="" name="end_complemento" value="{{ $cliente->end_complemento }}">
		</div>
		<div class="form-group">
			<label for="bairro">Bairro<em>*</em></label>
			<input type="text" class="form-control" id="bairro" placeholder="" name="bairro" value="{{ $cliente->bairro }}">
		</div>
		<div class="form-group">
			<label for="uf">UF<em>*</em></label>
			<select id="uf" class="form-control selectpicker" data-show-subtext="true" data-live-search="true" title="- Selecione -" name="uf" default="{{$cliente->cidade->uf}}">				
			</select>
		</div>
		<div class="form-group">
			<label for="cidade">Cidade<em>*</em></label>
			<select id="cidade" class="form-control selectpicker" data-show-subtext="true" data-live-search="true" title="- Selecione -" name="cidade_id" default="{{ $cliente->cidade->id }}">
				<option>Selecione</option>
			</select>
		</div>
	</div>



	<h2>Dados do Plano</h2>
	
	<div class="form-inline">
		<div class="form-group">
			<label for="cliente_vinculado">Vinculado a<em>*</em></label>
			<select class="form-control selectpicker" id="cliente_vinculado" name="vinculo_id">
				<option value="" selected="">Não possui vínculo</option>
				<optgroup label="Empresas">
					@if(count($vinculosPJ))
						@foreach($vinculosPJ as $id => $vinculo)
							<option value="{{$id}}">{{$vinculo}}</option>
						@endforeach
					@endif	
				</optgroup>
				<optgroup label="Pessoas">
					@if(count($vinculosPF))
						@foreach($vinculosPF as $id => $vinculo)
							<option value="{{$id}}" {{ $id == $cliente->vinculo_id ? 'selected' : '' }}>{{$vinculo}}</option>
						@endforeach
					@endif	
				</optgroup>
			</select>
		</div>
		<div class="form-group">
			<label for="plano">Plano<em>*</em></label>
			<select name="plano" class="selectpicker" data-show-subtext="true" data-live-search="true" title="- Selecione -">
				<option>Estação de Trabalho</option>
				@if(count($planos))
					@foreach($planos as $id => $plano)
						<option value="{{$id}}"  {{ $id == $cliente->plano_id ? 'selected' : '' }}>{{$plano}}</option>
					@endforeach
				@endif				
			</select>
		</div>
		<div class="form-group">
			<label for="responsavel">É o Responsável?<em>*</em></label>
			<select class="form-control selectpicker" id="responsavel" name="responsavel">
				<option>Não</option>
				<option>Sim</option>
			</select>
		</div>
		<div class="form-group">
			<label for="qtde_horas_sala_reuniao">+ Sala de Reunião (h)</label>
			<input type="text" class="form-control" id="qtde_horas_sala_reuniao" placeholder="Apenas números" name="hr_sala_reuniao" value="{{$cliente->hr_sala_reuniao}}">
		</div>
		<div class="form-group">
			<label for="qtde_horas_sala_treinamento">+ Sala de Treinamento (h)</label>
			<input type="text" class="form-control" id="qtde_horas_sala_treinamento" placeholder="Apenas números" name="hr_sala_treinamento" value="{{$cliente->hr_sala_treinamento}}">
		</div>
		<div class="form-group">
			<label for="numero_impressoes">Impressões Adicionais</label>
			<input type="text" class="form-control" id="numero_impressoes" placeholder="Apenas números" name="impressoes_adicionais" value="{{$cliente->impressoes_adicionais}}">
		</div>
		<div class="form-group">
			<label for="dia_pagamento">Dia de pagamento<em>*</em></label>
			<select class="form-control selectpicker" id="dia_pagamento" title="- Selecione -" name="dia_pagamento">
				@for($i=1;$i<32;$i++)
				<option value="{{$i}}" {{ $cliente->dia_pagamento == $i ? 'selected' : ''}}>
					{{$i}}
				</option>
				@endfor
			</select>
		</div>
		<div class="form-group">
			<div class="checkbox ativar">
				<label>
					<input type="checkbox" name="ativo" value="1" {{ $cliente->ativo == 1 ? 'checked' : ''}}> Ativo?
				</label>
			</div>
		</div>
	</div>


	<div class="botao_submit">
		<button type="submit" class="btn btn-default">Cadastrar Cliente</button>
	</div>

</form>
<!-- fim FORMULARIO -->
@stop