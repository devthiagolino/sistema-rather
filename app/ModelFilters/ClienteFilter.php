<?php namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class ClienteFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relatedModel => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function plano($plano)
    {
        return $this->where('plano_id', $plano);
    }

    public function ativo($ativo)
    {
        return $this->where('clientes.ativo', $ativo);
    }

    public function nome($nome)
    {
        return $this->leftJoin('clientes_pf', 'clientes.id', '=', 'clientes_pf.cliente_id')
                    ->leftJoin('clientes_pj', 'clientes.id', '=', 'clientes_pj.cliente_id')
                    ->whereRaw("(clientes_pf.nome like '%{$nome}%' OR clientes_pj.razao_social like '%{$nome}%')");
    }

}
