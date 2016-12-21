<h2>Dados Pessoais</h2>

<div class="form-inline">

	<div class="form-group">
		<label for="nome">Nome<em>*</em></label>
		<input type="text" class="form-control" id="nome" placeholder="Nome Completo" name="nome" value="{{ $item->TipoPF->nome }}">
	</div>

	<div class="form-group">
		<label for="nome_apresentacao_nick">Nome para o sistema<em>*</em></label>
		<input type="text" class="form-control" id="nome_apresentacao_nick" placeholder="Nome e Sobrenome" name="nome_apresentacao_nick" value="{{ $item->TipoPF->nome_apresentacao_nick }}">
	</div>

	<div class="form-group">
		<label for="email">E-mail<em>*</em></label>
		<input type="email" class="form-control" id="email" placeholder="E-mail" name="email" value="{{ $item->email }}">
	</div>

	<div class="form-group">
		<label for="data_nascimento">Data Nascimento<em>*</em></label>
		<input type="text" class="form-control" id="data_nascimento" placeholder="00/00/0000" name="data_nascimento" value="{{ $item->TipoPF->data_nascimento->format('d/m/Y') }}">
	</div>

	<div class="form-group">
		<label for="cpf">CPF<em>*</em></label>
		<input type="text" class="form-control" id="cpf" placeholder="000.000.000-00" name="cpf" value="{{ $item->TipoPF->cpf }}">
	</div>

	<div class="form-group">
		<label for="rg">RG</label>
		<input type="text" class="form-control" id="rg" placeholder="" name="rg" value="{{$item->TipoPF->rg}}">
	</div>

	<div class="form-group">
		<label for="genero">Sexo<em>*</em></label>
		<select class="form-control selectpicker" id="genero" title="- Selecione -" name="genero">
			<option value="M" {{ $item->TipoPF->genero == 'M' ? 'selected' : '' }}>Masculino</option>
			<option value="F" {{ $item->TipoPF->genero == 'F' ? 'selected' : '' }}>Feminino</option>
			<option value="O" {{ $item->TipoPF->genero == 'O' ? 'selected' : '' }}>Outros</option>
		</select>
	</div>

	<div class="form-group">
		<label for="telefone_movel">Celular<em>*</em></label>
		<input type="text" class="form-control" id="telefone_movel" placeholder="(00) 00000-0000" name="celular" value="{{ $item->TipoPF->celular }}">
	</div>

	<div class="form-group">
		<label for="telefone">Telefone</label>
		<input type="text" class="form-control" id="telefone" placeholder="(00) 0000-0000" name="telefone" value="{{ $item->TipoPF->telefone }}">
	</div>

	<div class="form-group input_file">
		<label for="foto">Foto</label>
		<input type="file" id="foto" name="foto">
		<!-- <p class="help-block">Selecione uma foto do cliente</p> -->
	</div>

	<div class="form-group textarea">
		<label for="observacoes">Observações Sobre o Cliente</label>
		<textarea class="form-control" rows="3" id="observacoes" name="observacoes">{{$item->observacoes}}</textarea>
	</div>

</div>