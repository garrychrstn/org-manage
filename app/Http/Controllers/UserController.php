<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $r)
    {
        $toReg = $r->validate([
            'nim' => ['required', Rule::unique('users', 'nim')],
            'name' => 'required',
            'divisi' => 'required',
            'email' => 'required',
            'password' => 'required',
            'angkatan' => 'required',
            'prodi' => 'required'
        ]);
        $toReg['password'] = bcrypt($toReg['password']);

        User::create($toReg);
        return redirect('/crud');
    }
    public function login(Request $r) {
        $toLog = $r->validate([
            'nim' => 'required',
            'password' => 'required'
        ]);
        if (auth()->attempt(['nim' => $r['nim'], 'password' => $r['password']])) {
            $r->session()->regenerate();
            return redirect('/');
        } else {
        return redirect('/login');}
    }
}
