@extends('admin.templates.app')
@section('content')
<!-- === TITULO SECAO === -->
<div class="titulo_secao">
	<h1>
		Cadastrar Cliente 
	</h1>

	<!-- === BOTOES OPCOES === -->
	<div class="btn-group pull-right">
		<a href="{{ route('admin.clientes.create') }}" class="btn btn-default">Novo Cliente</a>
		<a href="{{ route('admin.clientes.index')}}" class="btn btn-default">Ver Todos</a>
	</div>
	<!-- fim BOTOES OPCOES -->

</div>
<!-- fim TITULO SECAO -->



<!-- === FORMULARIO === -->
<form>

	<h2>Tipo do Cliente</h2>

	<div class="form-inline">
		<div class="form-group">
			<!-- <label for="tipo_cliente">Tipo do Cliente<em>*</em></label> -->
			<select class="form-control selectpicker" id="tipo_cliente">
				<option value="PF">Pessoa Física</option>
				<option value="PJ">Pessoa Jurídica</option>
			</select>
		</div>
	</div>



	<h2>Dados da Empresa</h2>

	<div class="form-inline">
		<div class="form-group">
			<label for="razao_social">Razão Social<em>*</em></label>
			<input type="text" class="form-control" id="razao_social" placeholder="Razão Social">
		</div>
		<div class="form-group">
			<label for="nome_fantasia">Nome Fantasia<em>*</em></label>
			<input type="text" class="form-control" id="nome_fantasia" placeholder="Nome Fantasia">
		</div>
		<div class="form-group">
			<label for="cnpj">CNPJ<em>*</em></label>
			<input type="text" class="form-control" id="cnpj" placeholder="00.000.000/0000-00">
		</div>
		<div class="form-group">
			<label for="email">E-mail<em>*</em></label>
			<input type="email" class="form-control" id="email" placeholder="E-mail">
		</div>
		<div class="form-group">
			<label for="empresa_telefone">Telefone</label>
			<input type="text" class="form-control" id="empresa_telefone" placeholder="(00) 0000-0000">
		</div>
		<div class="form-group input_file">
			<label for="foto">Logo</label>
			<input type="file" id="foto">
			<!-- <p class="help-block">Selecione uma foto do cliente</p> -->
		</div>
		<div class="form-group textarea">
			<label for="observacoes">Observações Sobre a Empresa</label>
			<textarea class="form-control" rows="3" id="observacoes"></textarea>
		</div>
	</div>



	<h2>Dados Pessoais</h2>

	<div class="form-inline">
		<div class="form-group">
			<label for="nome">Nome<em>*</em></label>
			<input type="text" class="form-control" id="nome" placeholder="Nome Completo">
		</div>
		<div class="form-group">
			<label for="apelido">Nome para o sistema<em>*</em></label>
			<input type="text" class="form-control" id="apelido" placeholder="Nome e Sobrenome">
		</div>
		<div class="form-group">
			<label for="email">E-mail<em>*</em></label>
			<input type="email" class="form-control" id="email" placeholder="E-mail">
		</div>
		<div class="form-group">
			<label for="data_nascimento">Data Nascimento<em>*</em></label>
			<input type="text" class="form-control" id="data_nascimento" placeholder="00/00/0000">
		</div>
		<div class="form-group">
			<label for="cpf">CPF<em>*</em></label>
			<input type="text" class="form-control" id="cpf" placeholder="000.000.000-00">
		</div>
		<div class="form-group">
			<label for="rg">RG</label>
			<input type="text" class="form-control" id="rg" placeholder="">
		</div>
		<div class="form-group">
			<label for="sexo">Sexo<em>*</em></label>
			<select class="form-control selectpicker" id="sexo" title="- Selecione -">
				<option>Masculino</option>
				<option>Feminino</option>
			</select>
		</div>
		<div class="form-group">
			<label for="telefone_movel">Celular<em>*</em></label>
			<input type="text" class="form-control" id="telefone_movel" placeholder="(00) 00000-0000">
		</div>
		<div class="form-group">
			<label for="telefone">Telefone</label>
			<input type="text" class="form-control" id="telefone" placeholder="(00) 0000-0000">
		</div>
		<div class="form-group input_file">
			<label for="foto">Foto</label>
			<input type="file" id="foto">
			<!-- <p class="help-block">Selecione uma foto do cliente</p> -->
		</div>
		<div class="form-group textarea">
			<label for="observacoes">Observações Sobre o Cliente</label>
			<textarea class="form-control" rows="3" id="observacoes"></textarea>
		</div>
	</div>



	<h2>Endereço</h2>

	<div class="form-inline">
		<div class="form-group">
			<label for="cep">CEP<em>*</em></label>
			<input type="text" class="form-control" id="cep" placeholder="00000-000">
		</div>
		<div class="form-group">
			<label for="endereco">Endereço<em>*</em></label>
			<input type="text" class="form-control" id="endereco" placeholder="Rua / Avenida / Rodovia">
		</div>
		<div class="form-group">
			<label for="numero">Nº<em>*</em></label>
			<input type="text" class="form-control" id="numero" placeholder="Número do Imóvel">
		</div>
		<div class="form-group">
			<label for="complemento">Complemento</label>
			<input type="text" class="form-control" id="complemento" placeholder="">
		</div>
		<div class="form-group">
			<label for="bairro">Bairro<em>*</em></label>
			<input type="text" class="form-control" id="bairro" placeholder="">
		</div>
		<div class="form-group">
			<label for="uf">UF<em>*</em></label>
			<select id="uf" class="form-control selectpicker" data-show-subtext="true" data-live-search="true" title="- Selecione -">
				<option>Acre</option>
				<option>Alagoas</option>
			</select>
		</div>
		<div class="form-group">
			<label for="cidade">Cidade<em>*</em></label>
			<select id="cidade" class="form-control selectpicker" data-show-subtext="true" data-live-search="true" title="- Selecione -">
				<option>Atalaia</option>
				<option>Coruripe</option>
				<option>Maceió</option>
			</select>
		</div>
	</div>



	<h2>Dados do Plano</h2>
	
	<div class="form-inline">
		<div class="form-group">
			<label for="cliente_vinculado">Vinculado a<em>*</em></label>
			<select class="form-control selectpicker" id="cliente_vinculado">
				<option value="" selected="">Não possui vínculo</option>
				<optgroup label="Empresas">
					<option value="doity">Doity</option>
					<option value="ema">Ema</option>
					<option value="locadados">Locadados</option>
					<option value="maceio_ordinario">Maceió Ordinário</option>
					<option value="umdois">UmDois</option>
					<option value="yooh">Yooh</option>
				</optgroup>
				<optgroup label="Pessoas">
					<option value="Aulus Raffael">Aulus Raffael</option>
					<option value="Edivan Barbosa">Edivan Barbosa</option>
					<option value="Jamerson Ramalho">Jamerson Ramalho</option>
				</optgroup>
			</select>
		</div>
		<div class="form-group">
			<label for="plano">Plano<em>*</em></label>
			<select name="plano" class="selectpicker" multiple data-show-subtext="true" data-live-search="true" title="- Selecione -">
				<option>Estação de Trabalho</option>
				<option>Sala Privativa (3 pessoas)</option>
				<option>Sala Privativa (4 pessoas)</option>
				<option>Sala Privativa (7 pessoas)</option>
				<option>Sala Privativa (9 pessoas)</option>
				<option>Sala de Reunião</option>
				<option>Sala de Treinamento</option>
			</select>
		</div>
		<div class="form-group">
			<label for="responsavel">É o Responsável?<em>*</em></label>
			<select class="form-control selectpicker" id="responsavel">
				<option selected="selected">Não</option>
				<option>Sim</option>
			</select>
		</div>
		<div class="form-group">
			<label for="qtde_horas_sala_reuniao">+ Sala de Reunião (h)</label>
			<input type="text" class="form-control" id="qtde_horas_sala_reuniao" placeholder="Apenas números">
		</div>
		<div class="form-group">
			<label for="qtde_horas_sala_treinamento">+ Sala de Treinamento (h)</label>
			<input type="text" class="form-control" id="qtde_horas_sala_treinamento" placeholder="Apenas números">
		</div>
		<div class="form-group">
			<label for="numero_impressoes">Impressões Adicionais</label>
			<input type="text" class="form-control" id="numero_impressoes" placeholder="Apenas números">
		</div>
		<div class="form-group">
			<label for="dia_pagamento">Dia de pagamento<em>*</em></label>
			<select class="form-control selectpicker" id="dia_pagamento" title="- Selecione -">
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
					<input type="checkbox"> Ativo?
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