<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;
class PeriodeController extends Controller
{
    public function register(Request $r) {
        $toReg = $r->validate([
            'year' => 'nullable',
            'name' => 'required'
        ]);

         
         $toReg['year'];
         if (empty($toReg['year'])) {
            $toReg['year'] = Carbon::now()->year;
        }

        $periodYear = $toReg['year'];

        $existingPeriod = Periode::where('year', $periodYear)->first();

        if ($existingPeriod) {
            return redirect('/crud')->with('error', 'Tahun periode sudah ada.');
        }

         Periode::create($toReg);
 
         return redirect('/crud')->with('success', 'Periode berhasil didaftarkan!');
    }
}
