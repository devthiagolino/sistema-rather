<?php

namespace App\Entities;

class ClientePJ extends AbstractModel
{
    public $table = 'clientes_pj';

    public $fillable = [
	    'razao_social',
	    'nome_fantasia',
	    'ramo_atividade',
	    'cnpj',
	    'atividades_iniciadas_em',
	    'nome_representante_legal'
    ];

    public function getTitulo()
    {
    	return 'Pessoa Jurídica';
    }
}
