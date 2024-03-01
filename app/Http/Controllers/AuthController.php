<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function auth()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        }else{
            return view('auth.auth');
        }
    }

    public function actionregister(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Session::flash('message', 'Register Berhasil. Akun Anda sudah aktif, silahkan login menggunakan Email dan Password');
        return redirect('/auth');
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('/dashboard');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/auth');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
