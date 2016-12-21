var APP = {

	init: function()
	{
		this.TiposDeCliente();
		this.UfCidadesBR();
		this.CriarCliente();	
	},

	TiposDeCliente: function()
	{
		var escolherTipoDeCliente 	= 	$('#tipo_cliente');
		var envolveFormulario 		=	$('.envolve-tipo-de-cliente');
		var mostrarAlert = 0;
		escolherTipoDeCliente.on('change', function()
		{

			var self = $(this);

			if(mostrarAlert > 0)
			{
				swal({
					title: "Você tem certeza?",
					text: "Se confirmar, você vai perder as informações já informadas no formulário abaixo.",
					type: "warning",
					showCancelButton: true,
					confirmButtonColor: "#DD6B55",
					confirmButtonText: "Sim, alterar tipo de cliente!",
					cancelButtonText: "Cancelar",
					closeOnConfirm: true
				}, function(isConfirm)
				{
					if(isConfirm)
					{
						var html = APP.alterarFormulerioCliente(self);
						envolveFormulario.hide().empty().html(html).fadeIn();
						mostrarAlert++;
					}
				});

			}else{

				var html = APP.alterarFormulerioCliente(self);
				envolveFormulario.hide().empty().html(html).fadeIn();
				mostrarAlert++;
			}		

		});
	},

	UfCidadesBR: function()
	{
		$('#uf').ufs({
			onChange: function(uf)
			{
				$('#cidade').cidades({uf: uf});
			}
		});
	},

	CriarCliente: function()
	{
		var output = $('.output');
		var options = {
			dataType:  'json', 
			beforeSubmit: function()
			{
				
			},
			success: function(response)
			{

				if(response.sucesso)
				{
					swal(
					{
						title: "Parabéns!",
						text: response.sucesso,
						timer: 3000,
						showConfirmButton: true
					}, function()
					{
						if(response.redirect)
						{
							window.location = response.redirect;	
						}
					});
				}

			},
			error: function(data)
			{
				var retornoJson = $.parseJSON(data.responseText);
				var erros = [];
				output.empty().hide().append('<div class="alert alert-danger"><ul></ul></div>').fadeIn(600);
				$.each(retornoJson, function(index, item)
				{
					output.find('ul').append('<li>'+ item +'</li>');
				});

				APP.mostrarErros();
			}
		};

		$('#cadastrar-cliente').ajaxForm(options);
	},

	mostrarErros: function()
	{
		var body = $("html, body");
		body.stop().animate({scrollTop:0}, '500', 'swing');
	},

	alterarFormulerioCliente: function(elem)
	{
		var tipoEscolhido = elem.find('option:selected').val();

		if(!tipoEscolhido)
		{
			return false;
		}

		if(tipoEscolhido != 'pj' && tipoEscolhido != 'pf')
		{
			return false;
		}

		var estrutura   = $("#cliente-" + tipoEscolhido).html();
		var template = Handlebars.compile(estrutura);
		var contexto = {};
		var html    = template(contexto);

		return html;
	}

};

$(document).ready(function(){
	APP.init();
});