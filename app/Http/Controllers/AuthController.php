<?php

namespace App\Http\Controllers;

use App\Http\Services\AuthServices;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function signup(Request $request)
    {
        return AuthServices::signUp($request->all());
    }

    public function signin(Request $request)
    {
        return AuthServices::signIn($request->all());
    }

    public function recover_password(Request $request)
    {
        return AuthServices::recoverPass($request->all());
    }

    public function change_password(Request $request)
    {
        return AuthServices::changePass($request->all());
    }

    public function logout(Request $request)
    {
        return AuthServices::logout();
    }
}
