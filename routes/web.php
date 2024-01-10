<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BorangController;
use App\Http\Controllers\PentadbirController;
use App\Http\Controllers\BilikMesyuaratController;
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
    return view("home");
});
// Display the form
Route::get('/borang', [BorangController::class, 'showForm'])->name('borang.form');
Route::post('/borang/submit', [BorangController::class, 'borangSubmission'])->name('borang.submit');

Route::get('/pentadbirs', [PentadbirController::class, 'index'])->name('pentadbir.index');
Route::post('/pentadbirs/login', [PentadbirController::class, 'login'])->name('pentadbir.login');
Route::get('/pentadbirs/permohonan', [BorangController::class, 'displayPermohonan'])->name('pentadbirs.permohonan');

Route::prefix('/pentadbirs/bilik-mesyuarat')->group(function () {
    Route::get('/', [BilikMesyuaratController::class, 'senarai'])->name('bilik-mesyuarat.senarai');
    Route::get('/create', [BilikMesyuaratController::class, 'create'])->name('bilik-mesyuarat.create');
    Route::post('/', [BilikMesyuaratController::class, 'store'])->name('bilik-mesyuarat.store');
    Route::get('/{id}', [BilikMesyuaratController::class, 'show'])->name('bilik-mesyuarat.show');
    Route::get('/{id}/edit', [BilikMesyuaratController::class, 'edit'])->name('bilik-mesyuarat.edit');
    Route::put('/{id}', [BilikMesyuaratController::class, 'update'])->name('bilik-mesyuarat.update');
    Route::delete('/{id}', [BilikMesyuaratController::class, 'destroy'])->name('bilik-mesyuarat.destroy');
});
?>
