<?php

namespace App\Entities;
use App\Entities\Plano;
use App\Entities\ClientePJ;
use App\Entities\ClientePF;

class Cliente extends AbstractModel
{
	public $table = 'clientes';

	public function getListaClientes($qtd = 10)
	{
		return $this
		->select([
			'clientes.*',
			'planos.titulo as plano'
		])
		->join('planos', 'clientes.plano_id', '=', 'planos.id')
		->orderBy('clientes.created_at', 'desc')
		->paginate($qtd);
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
