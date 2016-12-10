<?php

namespace App\Entities;

class ClientePF extends AbstractModel
{
    public $table = 'clientes_pf';

    public function getTitulo()
    {
    	return 'Pessoa Física';
    }
}
