<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);



        if (Auth::guard('web')->attempt($credentials)) {

            return  Auth::user()->usertype == 'admin' ?  redirect()->intended('/admin') :  redirect()->intended('/');
        };

        return redirect('/login')->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    public function viewlogin()
    {

        //para hindi na mag balik liwat sa login page biskan naka login kana liwat
        return response()->view('pages.login')
            ->header('Cache-Control', 'no-cache, no-store, must-revalidate')
            ->header('Pragma', 'no-cache')
            ->header('Expires', '0');
    }

    //logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
