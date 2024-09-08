<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    public function register(Request $r) {
        $toReg = $r->validate([
            'year' => 'required',
            'name' => 'required'
        ]);
        Periode::create($toReg);
        return redirect('/crud');
    }
}
