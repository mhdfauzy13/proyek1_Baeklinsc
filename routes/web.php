<?php

use App\Http\Controllers\admin\LayananController as AdminLayananController;
use App\Http\Controllers\client\HistoryController;
use App\Http\Controllers\client\LayananController;
use App\Http\Controllers\client\TransaksiController;
use App\Http\Controllers\LayananDetailController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');
    Route::get('/layanan/{nama}', [LayananController::class, 'show'])->name('layanan.show');

    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
    Route::get('/history', [HistoryController::class, 'index'])->name('history.index');
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('admin/layanan',[AdminLayananController::class, 'index'])->name('layanan.admin')->middleware('role:admin');;
    Route::get('admin/layanan/create',[AdminLayananController::class, 'create'])->name('layanan.create') ;
    Route::post('admin/layanan/create',[AdminLayananController::class, 'store'])->name('layanan.store') ;
    Route::delete('admin/layanan/{id}',[AdminLayananController::class, 'destroy'])->name('layanan.destroy') ;
     Route::get('admin/layanan/{id}/edit',[AdminLayananController::class, 'edit'])->name('layanan.edit') ;

    Route::delete('admin/layanan/detail/{id}',[LayananDetailController::class, 'destroy'])->name('layanan.detail.destroy') ;


    
});

require __DIR__ . '/auth.php';
