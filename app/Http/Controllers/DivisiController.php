<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function register(Request $r)
    {
        $toReg = $r->validate([
            'name' => 'required',
            'periode' => 'required'
        ]);
        Divisi::create($toReg);
        return redirect('/crud');
    }
    public function masssub(Request $r)
    {
        if ($r->divs == 'default') {
            $divss = [
                [
                    'name' => 'ketua',
                    'periode' => auth()->user()->division->periode
                ],
                [
                    'name' => 'wakil ketua',
                    'periode' => auth()->user()->division->periode
                ],
                [
                    'name' => 'humas eksternal',
                    'periode' => auth()->user()->division->periode
                ],
                [
                    'name' => 'humas internal',
                    'periode' => auth()->user()->division->periode
                ],
                [
                    'name' => 'sekretaris',
                    'periode' => auth()->user()->division->periode
                ],
                [
                    'name' => 'bendahara',
                    'periode' => auth()->user()->division->periode
                ],
                [
                    'name' => 'sosial budaya',
                    'periode' => auth()->user()->division->periode
                ],
                [
                    'name' => 'kominfo',
                    'periode' => auth()->user()->division->periode
                ],
                [
                    'name' => 'olahraga',
                    'periode' => auth()->user()->division->periode
                ],
                [
                    'name' => 'pendidikan',
                    'periode' => auth()->user()->division->periode
                ],
                [
                    'name' => 'riset',
                    'periode' => auth()->user()->division->periode
                ],
            ];
            foreach ($divss as $d) {
                Divisi::create($d);
            }
        }
    }
}
