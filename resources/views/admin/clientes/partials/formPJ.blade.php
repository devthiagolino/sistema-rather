<h2>Dados da Empresa</h2>

	<div class="form-inline">

		<div class="form-group">
			<label for="razao_social">Razão Social<em>*</em></label>
			<input type="text" class="form-control" id="razao_social" placeholder="Razão Social" name="razao_social" value="{{ $item->TipoPJ->razao_social }}">
		</div>

		<div class="form-group">
			<label for="nome_fantasia">Nome Fantasia<em>*</em></label>
			<input type="text" class="form-control" id="nome_fantasia" placeholder="Nome Fantasia" name="nome_fantasia" value="{{ $item->TipoPJ->nome_fantasia }}">
		</div>

		<div class="form-group">
			<label for="cnpj">CNPJ<em>*</em></label>
			<input type="text" class="form-control" id="cnpj" placeholder="00.000.000/0000-00" name="cnpj" value="{{ $item->TipoPJ->cnpj }}">
		</div>

		<div class="form-group">
			<label for="email">E-mail<em>*</em></label>
			<input type="email" class="form-control" id="email" placeholder="E-mail" name="email" value="{{ $item->email }}">
		</div>

		<div class="form-group">
			<label for="empresa_telefone">Telefone</label>
			<input type="text" class="form-control" id="empresa_telefone" placeholder="(00) 0000-0000" name="telefone" value="{{ $item->telefone }}">
		</div>

		<div class="form-group">
			<label for="telefone_movel">Celular<em>*</em></label>
			<input type="text" class="form-control" id="telefone_movel" placeholder="(00) 00000-0000" name="celular" value="{{ $item->celular }}">
		</div>

		<div class="form-group input_file">
			<label for="foto">Logo</label>
			<input type="file" id="foto" name="foto">
			<!-- <p class="help-block">Selecione uma foto do cliente</p> -->
		</div>

		<div class="form-group textarea">
			<label for="observacoes">Observações Sobre a Empresa</label>
			<textarea class="form-control" rows="3" id="observacoes" name="observacoes">{{$item->observacoes}}</textarea>
		</div>

	</div>