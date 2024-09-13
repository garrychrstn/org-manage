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
        $current_user = auth()->user()->division;

        // jika user memilih template, maka...
        if ($r->divs == 'default') {
            // template divisi dari tahun ke tahun
            $divss = [
                [
                    'name' => 'ketua',
                    'periode' => $current_user->periode
                ],
                [
                    'name' => 'wakil ketua',
                    'periode' => $current_user->periode
                ],
                [
                    'name' => 'humas eksternal',
                    'periode' => $current_user->periode
                ],
                [
                    'name' => 'humas internal',
                    'periode' => $current_user->periode
                ],
                [
                    'name' => 'sekretaris',
                    'periode' => $current_user->periode
                ],
                [
                    'name' => 'bendahara',
                    'periode' => $current_user->periode
                ],
                [
                    'name' => 'sosial budaya',
                    'periode' => $current_user->periode
                ],
                [
                    'name' => 'kominfo',
                    'periode' => $current_user->periode
                ],
                [
                    'name' => 'olahraga',
                    'periode' => $current_user->periode
                ],
                [
                    'name' => 'pendidikan',
                    'periode' => $current_user->periode
                ],
                [
                    'name' => 'riset',
                    'periode' => $current_user->periode
                ],
                [
                    'name' => 'koordinator',
                    'periode' => $current_user->periode
                ],
            ];
            // 
            foreach ($divss as $d) {
                Divisi::create($d);
            }
            $setup = $current_user->periodes;
            $setup->setup = true;

            return redirect('/setup-periode');
        } else {
            // form biasa, perlu di validasi, meh turu sik
        }
    }
}
