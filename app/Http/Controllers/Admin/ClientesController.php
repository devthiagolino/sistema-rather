<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Entities\Cliente;
use App\Entities\Plano;
use App\Entities\ClientePF;
use App\Entities\ClientePJ;

use JansenFelipe\Utils\Utils as Utils;
use JansenFelipe\Utils\Mask as Mask;

use Validator;

class ClientesController extends Controller
{

	private $model = null;

	public function __construct(Cliente $model)
	{
		$this->model = $model;
	}

	public function index(Request $request)
	{
		$clientes = $this->model->getListaClientes()
		->filter($request->all())
		->paginateFilter(10);

		return view('admin.clientes.index', compact('clientes'));
	}

	public function create()
	{
		$planos 	= Plano::getPlanosAtivos();
		$vinculosPF 	= Cliente::getVinculos();
		$vinculosPJ 	= Cliente::getVinculos('pj');
		return view('admin.clientes.create', compact('planos', 'vinculosPJ', 'vinculosPF'));
	}

	public function store(Request $request)
	{

		$validator = Validator::make($request->all(), [
			'tipo_cliente' => 'required'
			]);

		if($validator->fails()) 
		{
			return response()->json($validator->errors(), 422);
		}

		$validator = null;

		$tipoDeCliente = $request->get('tipo_cliente');

		if($tipoDeCliente == 'pf')
		{
			$validator = Validator::make($request->all(), Cliente::$rulesPF);
		}else{
			$validator = Validator::make($request->all(), Cliente::$rulesPJ);
		}

		if($validator->fails()) 
		{
			return response()->json($validator->errors(), 422);
		}

		$clienteData = [
		'plano_id' 			=> $request->get('plano'),
		'vinculado_a' 		=> $request->get('vinculo_id', 0),
		'email' 			=> $request->get('email'),
		'telefone' 			=> Utils::unmask($request->get('telefone', null)),
		'celular' 			=> Utils::unmask($request->get('celular')),
		'observacoes' 		=> $request->get('observacoes', null),
		'cep'				=> Utils::unmask($request->get('cep', null)),
		'endereco' 			=> $request->get('endereco', null),
		'end_numero' 		=> $request->get('numero', null),
		'end_complemento' 	=> $request->get('end_complemento', null),
		'bairro' 			=> $request->get('bairro', null),
		'ativo' 			=> $request->get('ativo', 1)
		];

		if($request->hasFile('foto'))
		{
			$clienteData['foto'] = $request->foto->extension();
		}
		
		try{
			
			$cliente = Cliente::create($clienteData);

			if($request->hasFile('foto'))
			{
				$ext = $request->foto->extension();
				$path = $request->file('foto')->move(public_path('clientes'), "{$cliente->id}_foto.{$ext}");
			}

		}catch(\Exception $e){

			if(env('APP_DEBUG'))
			{
				return response()->json(['erro' => $e->getMessage()], 500);
			}else{
				return response()->json(['erro' => 'Não foi possível criar um novo cliente, por favor entrar em contato com o suporte. :)'], 500);
			}

		}

		$tipoClienteData = [
		'pf' => [
		'nome' => $request->get('nome'),
		'nome_apresentacao_nick' => $request->get('nome_apresentacao_nick', null),
		'cpf' => Utils::unmask($request->get('cpf')),
		'rg' => Utils::unmask($request->get('rg', null)),
		'genero' => $request->get('genero')
		],
		'pj' => [
		'razao_social' => $request->get('razao_social'),
		'nome_fantasia' => $request->get('nome_fantasia'),
		'ramo_atividade' => $request->get('ramo_atividade', null),
		'cnpj' => Utils::unmask($request->get('cnpj')),
		'atividades_iniciadas_em' => $request->get('atividades_iniciadas_em', \Carbon\Carbon::now()->format('Y-m-d')),
		'nome_representante_legal' => $request->get('nome_representante_legal', null)
		]
		];
		
		if($request->has('data_nascimento'))
		{
			$dataNascimento = \Carbon\Carbon::createFromFormat('d/m/Y', $request->get('data_nascimento'));

			if($dataNascimento)
			{
				$tipoClienteData[$tipoDeCliente]['data_nascimento'] = $dataNascimento->format('Y-m-d');
			}
		}

		if(!isset($tipoClienteData[$tipoDeCliente]))
		{
			return response()->json([
				'erro' => 'Alguma coisa não saiu como o esperado, por favor entrar em contato com o suporte. :)'
				], 500);
		}		

		if($tipoDeCliente == 'pf')
		{			
			$tipoCliente = new ClientePF($tipoClienteData[$tipoDeCliente]);
		}else{			
			$tipoCliente = new ClientePJ($tipoClienteData[$tipoDeCliente]);
		}

		try{
			
			$tipoCliente = $cliente->tipoPF()->save($tipoCliente);

		}catch(\Exception $e){
			
			if(env('APP_DEBUG'))
			{
				return response()->json(['erro' => $e->getMessage()], 500);
			}else{
				return response()->json(['erro' => 'Não foi possível criar um novo cliente, por favor entrar em contato com o suporte. :)'], 500);
			}	

		}

		return response()->json([
			'redirect' => route('admin.clientes.index'), 
			'sucesso' => 'Cliente cadastrado com sucesso.'
			]);

	}

	public function edit($id)
	{
		$cliente = Cliente::find($id);

		if(!$cliente)
		{
			return abort(404);
		}

		$planos 	= Plano::getPlanosAtivos();
		$vinculosPF 	= Cliente::getVinculos();
		$vinculosPJ 	= Cliente::getVinculos('pj');

		return view('admin.clientes.edit', compact('cliente', 'planos', 'vinculosPJ', 'vinculosPF'));
	}

	public function update($id)
	{
		
	}

	public function destroy($id)
	{
		
		$cliente = $this->model->find($id);

		if($cliente)
		{
			try{
				
				$cliente->delete();
				return response()->json([
					'sucesso' => 'Registro removido com sucesso!',
					'redirect' => route('admin.clientes.index')
					], 200);

			}catch(\Exception $e){
				
				if(env('APP_DEBUG'))
				{
					return response()->json(['erro' => $e->getMessage()], 500);
				}else{
					return response()->json(['erro' => 'Não foi possível remover esse cliente, por favor entrar em contato com o suporte. :)'], 500);
				}

			}
		}

		return response()->json(['erro' => 'Cliente não existe!'], 422);

	}


}
