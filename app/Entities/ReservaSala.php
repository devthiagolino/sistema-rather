<?php

namespace App\Entities;

class ReservaSala extends AbstractModel
{
    
	public $table = 'reservas_de_salas';
	
	public $dates = 
	[
		'dth_inicio', 
		'dth_fim'
	];

	static public function getReservasDoDia($qtd = 3)
	{
		return self::select([
					'reservas_de_salas.id as reserva_id', 
					'reservas_de_salas.sala_id', 
					'reservas_de_salas.dth_inicio', 
					'reservas_de_salas.dth_fim',
					'clientes.*'])
				->where('reservas_de_salas.ativo', 1)
				->where('clientes.ativo', 1)
				->join('clientes', 'reservas_de_salas.sala_id', '=', 'clientes.id')
				->take($qtd)
				->get();
	}

}
