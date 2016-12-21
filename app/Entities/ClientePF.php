<?php

namespace App\Entities;

class ClientePF extends AbstractModel
{
    public $table = 'clientes_pf';

    public $fillable = [
	    "nome",
	    "data_nascimento",
	    "nome_apresentacao_nick",
	    "cpf",
	    "rg",
	    "genero"
    ];

    public $dates = ['data_nascimento'];

    public function getTitulo()
    {
    	return 'Pessoa Física';
    }
}
