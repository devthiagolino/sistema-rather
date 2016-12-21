<script id="cliente-pf" type="text/x-handlebars-template">

	<h2>Dados Pessoais</h2>

	<div class="form-inline">

		<div class="form-group">
			<label for="nome">Nome<em>*</em></label>
			<input type="text" class="form-control" id="nome" placeholder="Nome Completo" name="nome">
		</div>

		<div class="form-group">
			<label for="nome_apresentacao_nick">Nome para o sistema<em>*</em></label>
			<input type="text" class="form-control" id="nome_apresentacao_nick" placeholder="Nome e Sobrenome" name="nome_apresentacao_nick">
		</div>

		<div class="form-group">
			<label for="email">E-mail<em>*</em></label>
			<input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
		</div>

		<div class="form-group">
			<label for="data_nascimento">Data Nascimento<em>*</em></label>
			<input type="text" class="form-control" id="data_nascimento" placeholder="00/00/0000" name="data_nascimento">
		</div>

		<div class="form-group">
			<label for="cpf">CPF<em>*</em></label>
			<input type="text" class="form-control" id="cpf" placeholder="000.000.000-00" name="cpf">
		</div>

		<div class="form-group">
			<label for="rg">RG</label>
			<input type="text" class="form-control" id="rg" placeholder="" name="rg">
		</div>

		<div class="form-group">
			<label for="genero">Sexo<em>*</em></label>
			<select class="form-control selectpicker" id="genero" title="- Selecione -" name="genero">
				<option value="M">Masculino</option>
				<option value="F">Feminino</option>
				<option value="O">Outros</option>
			</select>
		</div>

		<div class="form-group">
			<label for="telefone_movel">Celular<em>*</em></label>
			<input type="text" class="form-control" id="telefone_movel" placeholder="(00) 00000-0000" name="celular">
		</div>

		<div class="form-group">
			<label for="telefone">Telefone</label>
			<input type="text" class="form-control" id="telefone" placeholder="(00) 0000-0000" name="telefone">
		</div>

		<div class="form-group input_file">
			<label for="foto">Foto</label>
			<input type="file" id="foto" name="foto">
			<!-- <p class="help-block">Selecione uma foto do cliente</p> -->
		</div>

		<div class="form-group textarea">
			<label for="observacoes">Observações Sobre o Cliente</label>
			<textarea class="form-control" rows="3" id="observacoes" name="observacoes"></textarea>
		</div>

	</div>
	
</script>

<script id="cliente-pj" type="text/x-handlebars-template">

	<h2>Dados da Empresa</h2>

	<div class="form-inline">

		<div class="form-group">
			<label for="razao_social">Razão Social<em>*</em></label>
			<input type="text" class="form-control" id="razao_social" placeholder="Razão Social" name="razao_social">
		</div>

		<div class="form-group">
			<label for="nome_fantasia">Nome Fantasia<em>*</em></label>
			<input type="text" class="form-control" id="nome_fantasia" placeholder="Nome Fantasia" name="nome_fantasia">
		</div>

		<div class="form-group">
			<label for="cnpj">CNPJ<em>*</em></label>
			<input type="text" class="form-control" id="cnpj" placeholder="00.000.000/0000-00" name="cnpj">
		</div>

		<div class="form-group">
			<label for="email">E-mail<em>*</em></label>
			<input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
		</div>

		<div class="form-group">
			<label for="empresa_telefone">Telefone</label>
			<input type="text" class="form-control" id="empresa_telefone" placeholder="(00) 0000-0000" name="telefone">
		</div>

		<div class="form-group input_file">
			<label for="foto">Logo</label>
			<input type="file" id="foto" name="foto">
			<!-- <p class="help-block">Selecione uma foto do cliente</p> -->
		</div>

		<div class="form-group textarea">
			<label for="observacoes">Observações Sobre a Empresa</label>
			<textarea class="form-control" rows="3" id="observacoes" name="observacoes"></textarea>
		</div>

	</div>

</script>