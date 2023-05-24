<?php

use App\Http\Controllers\client\HistoryController;
use App\Http\Controllers\client\LayananController;
use App\Http\Controllers\client\TransaksiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/layanan', function () {
//     return view('Layanan');
// });
// Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');
// Route::get('/layanan/{nama}', [LayananController::class, 'show'])->name('layanan.show');


// Route::get('/detaillayanan', function () {
//     return view('Detaillayanan');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');
    Route::get('/layanan/{nama}', [LayananController::class, 'show'])->name('layanan.show');

    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
    Route::get('/history', [HistoryController::class, 'index'])->name('history.index');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
