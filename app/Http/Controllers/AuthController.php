<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Register successfully');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        ];

        if (Auth::attempt($credetials)) {
            if(Auth::user()->role === "admin"){
                return redirect('admin/dashboard')->with('success', 'Login berhasil');
            }elseif (Auth::user()->role==="operator") {
                return redirect('operator/dashboard')->with('success', 'Login berhasil');
            }elseif (Auth::user()->role==="verifikator") {
                return redirect('verifikator/dashboard')->with('success', 'Login berhasil');
            }

            //
        }

        return back()->with('error', 'Email or Password salah');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('loginuser');
    }
}