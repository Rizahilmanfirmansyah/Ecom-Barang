<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function aksireg(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email'=>'required',
            'password'=>'required',
            'role'=>'required',
        ]);

        $data['password'] = Hash::make($data['password']);
        User::create($data);
        session()->flash('notif', 'Akun Berhasil Dibuat');
        return redirect('/');

    }
}
