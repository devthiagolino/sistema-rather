<?php

namespace App\Entities;
use App\Entities\Plano;

class Cliente extends AbstractModel
{
	public $table = 'clientes';

	public function tipoPF()
	{
		return $this->belongsTo(ClienteTipoPF::class, 'tipo_cliente_id');
	}

	public function tipoPJ()
	{
		return $this->belongsTo(ClienteTipoPJ::class, 'tipo_cliente_id');
	}

	public function getCliente()
	{
		swicth($this->tipo_cliente_id)
		{
			case 1:
			return $this->tipoPF;
			break;
			case 2:
			return $this->tipoPJ;
			break;
			default:
			return null;
		}
	}

	public function getTipoCliente()
	{
		swicth($this->tipo_cliente_id)
		{
			case 1:
				return 'PF';
				break;
			case 2:
				return 'PJ';
				break;
			default:
				return null;
		}
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
