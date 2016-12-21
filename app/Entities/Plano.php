<?php

namespace App\Entities;

class Plano extends AbstractModel
{
    public $table = 'planos';

    public static function getPlanosAtivos($select = true)
    {
    	return self::where('ativo', 1)->orderBy('titulo', 'asc')->lists('titulo', 'id');
    }
}
