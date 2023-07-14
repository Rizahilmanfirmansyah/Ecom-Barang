<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
        if ($user = Auth::user()) {
            if ($user->role = 'seller') {
                return redirect()->intended('all-product');
            }elseif($user->role = 'user'){
                return redirect()->intended('home');
            }
        }
        return view('login');
    }

    public function aksilogin(Request $request)
    {
        request()->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $check = $request->only('email', 'password');

        if (Auth::attempt($check)) {
            $user = Auth::user();
            if ($user->role == 'seller') {
                return redirect()->intended('all-product');
            }elseif($user->role == 'user'){
                return redirect()->intended('home');
            }

            return redirect()->intended('/');
        }
        session()->flash('notif', 'Periksa Kembali Username Dan Password Anda');
        return redirect('/');

    }

    public function aksilogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
