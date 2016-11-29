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
		Auth::logout();
		return redirect()->route('auth.login');
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

		if (Auth::attempt($data, $request->get('remember', false))) 
		{
			return redirect()->route('dashboard');
		}

		return redirect()->back()->with('error', 'Não foi possível lhe autenticar no sistema.');
	}

}
