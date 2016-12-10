<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Entities\Cliente;

class ClientesController extends Controller
{

	private $model = null;

	public function __construct(Cliente $model)
	{
		$this->model = $model;
	}
    
	public function index(Request $request)
	{
		$clientes = $this->model->getListaClientes();
		return view('admin.clientes.index', compact('clientes'));
	}

	public function create()
	{
		return view('admin.clientes.create');
	}

	public function edit($id)
	{}

	public function destroy($id)
	{
		
		$cliente = $this->model->find($id);

		if($cliente)
		{
			$cliente->delete();
			return redirect()->back()->with('sucesso', 'Registro removido com sucesso!');
		}

		return redirect()->back()->with('erro', 'Registro não pôde ser removido!');

	}


}
