<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Entities\ReservaSala;
use App\Entities\Cliente;
use App\Entities\Evento;
use App\User;

class HomeController extends Controller
{
	public function home()
	{
		
		$reservasDoDia 			= ReservaSala::getReservasDoDia();
		$aniversariantesDoMes 	= User::getAniversariantesDoDia();
		$proximosEventos 		= Evento::getProximosEventos();

		return view('admin.home.app');
    }
}
