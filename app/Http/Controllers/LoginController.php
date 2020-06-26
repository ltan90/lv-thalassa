<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Please enter correct your email',
            'password.required' => 'Please enter correct your password'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/');
        }else{
            $errorLogin = 'Your email incorrect or Your password incorrect!';
            return view('login', compact('errorLogin'));
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
