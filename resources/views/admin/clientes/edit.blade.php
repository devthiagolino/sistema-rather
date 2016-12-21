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
			<select class="form-control selectpicker" id="tipo_cliente" name="tipo_cliente">
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
			<select id="uf" class="form-control selectpicker" data-show-subtext="true" data-live-search="true" title="- Selecione -" name="uf">				
			</select>
		</div>
		<div class="form-group">
			<label for="cidade">Cidade<em>*</em></label>
			<select id="cidade" class="form-control selectpicker" data-show-subtext="true" data-live-search="true" title="- Selecione -" name="cidade">
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
			<input type="text" class="form-control" id="qtde_horas_sala_reuniao" placeholder="Apenas números" name="qtd_hr_reuniao">
		</div>
		<div class="form-group">
			<label for="qtde_horas_sala_treinamento">+ Sala de Treinamento (h)</label>
			<input type="text" class="form-control" id="qtde_horas_sala_treinamento" placeholder="Apenas números" name="qtd_hr_treinamento">
		</div>
		<div class="form-group">
			<label for="numero_impressoes">Impressões Adicionais</label>
			<input type="text" class="form-control" id="numero_impressoes" placeholder="Apenas números" name="qtd_impressoes">
		</div>
		<div class="form-group">
			<label for="dia_pagamento">Dia de pagamento<em>*</em></label>
			<select class="form-control selectpicker" id="dia_pagamento" title="- Selecione -" name="dia_pagamento">
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
				<option>13</option>
				<option>14</option>
				<option>15</option>
				<option>16</option>
				<option>17</option>
				<option>18</option>
				<option>19</option>
				<option>20</option>
				<option>21</option>
				<option>22</option>
				<option>23</option>
				<option>24</option>
				<option>25</option>
				<option>26</option>
				<option>27</option>
				<option>28</option>
				<option>29</option>
				<option>30</option>
				<option>31</option>
			</select>
		</div>
		<div class="form-group">
			<div class="checkbox ativar">
				<label>
					<input type="checkbox" name="ativo" value="1"> Ativo?
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