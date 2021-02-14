<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
    /*
    * @Render Login Page
    */
    public function login()
    {
    	return view('auth.login');
    }

    /*
    * @Render Signup Page
    */
    public function signup()
    {
    	return view('auth.signup');
    }

    /*
    * @Create new user
    */
    public function create(AuthRequest $request)
    {
    	$createUser = $request->createUser();
    	return $createUser;
    }

    /*
    * @signin
    */
    public function signin(AuthRequest $request)
    {
    	$login = $request->login();
    	return $login;
    }

    /*
    * @Render Signup Page
    */
    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('home');
    }
}
