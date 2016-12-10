<?php

namespace App\Entities;

class ClientePJ extends AbstractModel
{
    public $table = 'clientes_pj';

    public function getTitulo()
    {
    	return 'Pessoa Jurídica';
    }
}
