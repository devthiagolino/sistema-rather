<?php

namespace App\Entities;
use App\Entities\Plano;
use App\Entities\ClientePJ;
use App\Entities\ClientePF;

use EloquentFilter\Filterable;
use Kyslik\ColumnSortable\Sortable;

class Cliente extends AbstractModel
{

	use Sortable, Filterable;

	public $sortable = 
	[
		'ativo'
	];

	public static $rulesPF = [
		'nome' 		=> 'required',
		'nome_apresentacao_nick' 	=> 'required',
		'email' 	=> 'required|email',
		'data_nascimento' => 'required',
		'cpf' 	=> 'required',
		'genero' 	=> 'required|in:M,F,O',
		'celular' => 'required'
	];

	public static $rulesPJ = [
		'razao_social' 	=> 'required',
		'nome_fantasia'	=> 'required',
		'cnpj' 	=> 'required',
		'email' => 'required|email',
		'celular' => 'required'
	];

	public $table = 'clientes';

	public $fillable = [
		'plano_id', 
		'vinculado_a', 
		'email', 
		'telefone',
		'celular', 	
		'observacoes', 
		'cep',
		'endereco',
		'end_numero', 
		'end_complemento', 
		'bairro', 
		'ativo'
	];

	public function modelFilter()
	{
		return $this->provideFilter(\App\ModelFilters\ClienteFilter::class);
	}

	public function getListaClientes()
	{
		return $this
		->select(
			[
			'clientes.*',
			'planos.titulo as plano'
			])
		->join('planos', 'clientes.plano_id', '=', 'planos.id')
		->orderBy('clientes.created_at', 'desc');
	}

	public function tipoPF()
	{
		return $this->hasOne(ClientePF::class, 'cliente_id');
	}

	public function tipoPJ()
	{
		return $this->hasOne(ClientePJ::class, 'cliente_id');
	}

	public function getCliente()
	{
		
		$tipo = $this->getTipoCliente();

		switch ($tipo)
		{
			case 'PF':
			return $this->tipoPF;
			break;
			case 'PJ':
			return $this->tipoPJ;
			break;
			default:
			return null;
			break;
		}

	}

	public static function getVinculos($tipo = 'pf')
	{
		
		$tiposPermitidos = ['pf', 'pj'];
		if(!in_array($tipo, $tiposPermitidos))
		{
			return [];
		}

		$orderBy = [
		'pj' => 'clientes_pj.razao_social', 
		'pf' => 'clientes_pf.nome'
		];

		$lists = [
		'pj' => [
		'clientes_pj.razao_social',
		'clientes_pj.id'
		], 
		'pf' => [
		'clientes_pf.nome',
		'clientes_pf.id'
		]
		];

		return self::where('clientes.ativo', 1)
		->join("clientes_{$tipo}", 'clientes.id', '=', "clientes_{$tipo}.cliente_id")
		->orderBy($orderBy[$tipo], 'asc')
		->lists($lists[$tipo][0], $lists[$tipo][1]);
	}

	public function getTipoCliente()
	{

		if($this->tipoPF)
		{
			return 'PF';
		}

		if($this->tipoPJ)
		{
			return 'PJ';
		}

		return null;

	}

	public function getPlano()
	{
		return $this->belongsTo(Plano::class, 'plano_id');
	}

	public function getVinculo()
	{
		return $this->belongsTo(Cliente::class, 'vinculado_a');
	}

	public function getEmail()
	{
		return $this->email ? $this->email : false;
	}

	public function getTelefone()
	{
		return $this->telefone ? $this->telefone : false;
	}

	public function getCelular()
	{
		return $this->celular ? $this->celular : false;
	}

	public function getObservacoes()
	{
		return $this->observacoes ? $this->observacoes : false;
	}

	public function getEndereco()
	{
		return $this->endereco ? $this->endereco : false;
	}

	public function getNumero()
	{
		return $this->end_numero ? $this->end_numero : false;
	}

	public function getComplemento()
	{
		return $this->end_complemento ? $this->end_complemento : false;
	}

	public function getBairro()
	{
		return $this->bairro ? $this->bairro : false;
	}

	public function getAtivo()
	{
		return $this->ativo ? $this->ativo : false;
	}

	public function getCriadoEm()
	{
		return $this->created_at ? $this->created_at->format('d/m/Y H:i') : false;
	}

}
