<?php

use App\Http\Controllers\Admin\LayananController as AdminLayananController;
use App\Http\Controllers\Client\HistoryController;
use App\Http\Controllers\Client\LayananController;
use App\Http\Controllers\Client\TransaksiController;
use App\Http\Controllers\LayananDetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RedirectController;
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

Route::get('/dashboard',[RedirectController::class,'index']);

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
    Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index')->middleware('isUser:user');
    Route::get('/layanan/{nama}', [LayananController::class, 'show'])->name('layanan.show')->middleware('isUser:user');

    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index')->middleware('isUser:user');
    Route::get('/history', [HistoryController::class, 'index'])->name('history.index')->middleware('isUser:user');
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('isUser:user');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('isUser:user');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy')->middleware('isUser:user');

    Route::get('admin/layanan',[AdminLayananController::class, 'index'])->name('layanan.admin')->middleware('role:admin');
    Route::get('admin/layanan/create',[AdminLayananController::class, 'create'])->name('layanan.create')->middleware('role:admin'); 
    Route::post('admin/layanan/create',[AdminLayananController::class, 'store'])->name('layanan.store')->middleware('role:admin'); 
    Route::delete('admin/layanan/{id}',[AdminLayananController::class, 'destroy'])->name('layanan.destroy')->middleware('role:admin'); 
    Route::get('admin/layanan/{id}/edit',[AdminLayananController::class, 'edit'])->name('layanan.edit')->middleware('role:admin'); 
    Route::patch('admin/layanan/update',[AdminLayananController::class, 'update'])->name('layanan.update')->middleware('role:admin'); 


    Route::delete('admin/layanan/detail/{id}',[LayananDetailController::class, 'destroy'])->name('layanan.detail.destroy')->middleware('role:admin'); 

});

require __DIR__ . '/auth.php';
