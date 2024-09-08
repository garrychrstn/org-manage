<?php

use App\Models\Periode;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\PeriodeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});


Route::get('/crud', function() {
    $periodes = Periode::all();
    return view('tempcrud', ['periodes' => $periodes]);
});

Route::post('/reg-periode', [PeriodeController::class, 'register']);
Route::post('/reg-divisi', [DivisiController::class, 'register']);