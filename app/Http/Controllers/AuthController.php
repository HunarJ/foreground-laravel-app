<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    // Shw login page
    public function showLogin()
    {
        return view('pages.login');
    }

    public function showRegister()
    {
        return view('pages.registration');
    }


    public function postRegister(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed',
         ]);

         $user = User::create([
            'name' => $request->name,
             'email' => $request->email,
             'password' => Hash::make($request->password),

         ]);

        Auth::login($user);

        return back()->with('success', 'Uspěšně přihlášen');

    }

    //Login user
    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
             'email' => 'required|email',
             'password' => 'required'
         ]);

       if(Auth::attempt($credentials)) {
            return redirect()->intended('admin');
       }

       return back()->withErrors([
        'email' => 'Neplatné přihlašovací údaje'
       ]);
       
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
