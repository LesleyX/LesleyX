<?php

namespace LesleyX\Http\Controllers;

use Auth;
use LesleyX\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
	public function getRegister()
	{
		return view('auth.register');
	}

	public function getLogin()
	{
		return view('auth.login');
	}
}