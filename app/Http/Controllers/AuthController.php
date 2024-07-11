<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($credential)) {
            return redirect('/dashboard')->with('success', 'Berhasil Login!!');
        }else{
            return back()->with('error', 'Email atau Password salah');
        }
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('landing');
    }
}
