<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Carbon;

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
            'angkatan' => 'nullable', //tak gae nullable gen ra error trus gen iso ke isi otomatis 
            'prodi' => 'required'
        ]);
        $toReg['password'] = bcrypt($toReg['password']);
        //nek kosong otomatis ke isi nggo if - now()-year
        if (empty($toReg['angkatan'])) {
            $toReg['angkatan'] = Carbon::now()->year;
        }
        User::create($toReg);
        return redirect('/crud')->with('success', 'User berhasil didaftarkan!');;
    }
    public function login(Request $r)
    {
        $toLog = $r->validate([
            'nim' => 'required',
            'password' => 'required'
        ]);
        $currentMonth = date('m');
        if (auth()->attempt(['nim' => $r['nim'], 'password' => $r['password']])) {
            $r->session()->regenerate();

            if (auth()->user()->division->name == 'Ketua' && $currentMonth == 9) {
                return redirect('/setup-periode');
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/login');
        }
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
