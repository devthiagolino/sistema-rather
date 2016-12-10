<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use Auth, Validator;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

	protected $model;

	public function __construct()
	{
		$this->model = new User();
	}

	public function login()
	{
		return view('admin.auth.login');
	}

	public function logout()
	{
		Auth::guard('admin')->logout();
		return redirect()->route('admin.auth.login');
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

		if (Auth::guard('admin')->attempt($data, $request->get('remember', false))) 
		{
			return redirect()->route('admin.dashboard');
		}

		return redirect()->back()->with('error', 'Não foi possível lhe autenticar no sistema.');
	}

}
