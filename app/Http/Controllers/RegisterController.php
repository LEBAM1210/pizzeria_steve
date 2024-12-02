<?php

namespace App\Http\FControllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;


class RegisterController extends RegisterController
{
    public function show(){
        return view('auth.register');
}

    public function register(Request $request){
        $user = User::create($request->validated());
        return redirect('/login')->with('success', 'Account created successfully');
    }

}