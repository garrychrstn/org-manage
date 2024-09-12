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
         //untuk memberi tahun secara otomatis jika tahun tidak terisi
        if (empty($toReg['year'])) {
            $toReg['year'] = Carbon::now()->year;
        }
        
        //mendefinisikan object 
        $periodYear = $toReg['year'];

        $existingPeriod = Periode::where('year', $periodYear)->first();
        
        //memberi pesan jika tahun sudah ada
        if ($existingPeriod) {
            return redirect('/crud')->with('error', 'Tahun periode sudah ada.');
        }

         Periode::create($toReg);
 
         return redirect('/crud')->with('success', 'Periode berhasil didaftarkan!');
    }
}
