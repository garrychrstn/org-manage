<?php

use App\Models\Divisi;
use App\Models\Periode;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    $handle = auth()->user();
    return view('landing', ['handle' => $handle]);
});
Route::get('/crud', function () {
    $periodes = Periode::all();
    $divisis = Divisi::all();
    return view('tempcrud', [
        'periodes' => $periodes,
        'divisis' => $divisis,
    ]);
});
Route::get('/login', function () {
    $handle = auth()->user();
    return view('login', ['handle' => $handle]);
});
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/manage', function () {
    return view('manage');
});
Route::get('/setup-periode', function () {
    $complete_division = auth()->user()->division->periodes->setup;

    $handle = auth()->user();
    return view('setup', ['handle' => $handle, 'setup' => $complete_division]);
});

Route::post('/login-user', [UserController::class, 'login']);
Route::post('/reg-periode', [PeriodeController::class, 'register']);
Route::post('/reg-divisi', [DivisiController::class, 'register']);
Route::post('/reg-member', [UserController::class, 'register']);
Route::post('/mass-division', [DivisiController::class, 'masssub']);