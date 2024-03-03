<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except([
            'actionlogout', 'dashboard'
        ]);
        $this->middleware('auth')->only('actionlogout', 'dashboard');
        $this->middleware('verified')->only('dashboard');
    }

    public function auth()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        }else{
            return view('auth.auth');
        }
    }

    public function verifyemail()
    {
        return view('auth.verifyemail');
    }

    public function actionregister(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile_pic' => 'https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png',
        ]);

        event(new Registered($user));

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        Session::flash('message', 'Register Berhasil. Akun Anda sudah aktif, silahkan login menggunakan Email dan Password');
        return redirect()->route('verification.notice');
    }

    public function actionlogin(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::Attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/auth');
        }
    }

    public function actionlogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
