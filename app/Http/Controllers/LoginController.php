<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Supoport\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return  view('auth.lohin');
    }
    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){
            return redirect()->to('/login')->withErrors('auth.failed');

        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);

    }
    public function authenticated(Request $request, $user){
        return redirect('/home');

    }
}
