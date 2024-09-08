<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{    
    public function register(Request $r) {
        $toReg = $r->validate([
            'name' => 'required',
            'periode' => 'required'
        ]);
        Divisi::create($toReg);
        return redirect('/crud');
    }
}
