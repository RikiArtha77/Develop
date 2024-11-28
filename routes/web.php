<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\FrontPageController;
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

Route::get('/landing', [FrontPageController::class,'index'])->name('landing');
Route::get('/produk', [FrontPageController::class,'produk'])->name('produk');
Route::get('/package', [FrontPageController::class,'package'])->name('package');
Route::get('/package/{id}', [FrontPageController::class,'detailpackage'])->name('detailpackage');
Route::get('/kontak', [FrontPageController::class,'kontak'])->name('kontak');
Route::get('/cart', [FrontPageController::class,'cart'])->name('cart');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::group(['middleware'=>'auth:sanctum'], function () {
 Route::resource('barang', BarangController::class);
}); 


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

route::middleware('auth')->resource('barang', BarangController::class);

require __DIR__.'/auth.php';
