<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    static public function getAniversariantesDoDia($qtd = 3)
    {
        return self::whereBetween('dt_nascimento', 
            [
                Carbon::now(),  //begin
                Carbon::now()->subMonth() //end
            ])->take($qtd)->get();
    }
}
