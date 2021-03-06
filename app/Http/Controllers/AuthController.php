<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth, Validator;

class AuthController extends Controller
{

	protected $model;

	public function __construct()
	{
		$this->model = new User();
	}

	public function login()
	{
		return view('auth.login');
	}

	public function logout()
	{
		Auth::guard('web')->logout();
		return redirect()->route('web.auth.login');
	}

	public function authenticate(Request $request)
	{
		
		$validator = Validator::make($request->all(), [
			'email' => 'required',
			'password' => 'required',
			]);

		if ($validator->fails()) {
			return redirect()
			->back()
			->withErrors($validator)
			->withInput();
		}

		$data = $request->only(['email', 'password']);

		if (Auth::guard('web')->attempt($data, $request->get('remember', false))) 
		{
			return redirect()->route('web.dashboard');
		}

		return redirect()->back()->with('error', 'Não foi possível lhe autenticar no sistema.');
	}

}
