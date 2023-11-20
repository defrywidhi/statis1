<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nilaiController;
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


Route::get('/',function(){
    
    return redirect ('/nilai');
 } 
);

Route::get('/dataBergolong', [nilaiController::class, 'dataBergolong']);
Route::get('/tabelDeskripsi', [nilaiController::class, 'tabelDeskripsi']);
Route::get('/dataSama', [nilaiController::class, 'dataSama']);
Route::get('/frekuensi', [nilaiController::class, 'distribusiFrekuensi']);
Route::get('/nilai', [nilaiController::class, 'index'])->name('nilai.index');
Route::get('/nilai/create', [nilaiController::class, 'create'])->name('nilai.create');
Route::post('/nilai', [nilaiController::class, 'store'])->name('nilai.store');
Route::get('/nilai/{dataSiswa}/edit', [nilaiController::class, 'edit'])->name('nilai.edit');
Route::put('/nilai/{dataSiswa}/update', [nilaiController::class, 'update'])->name('nilai.update');
Route::delete('/nilai/{dataSiswa}/delete', [nilaiController::class, 'delete'])->name('nilai.delete');
Route::get('/nilai', [nilaiController::class, 'index'])->name('nilai.index');
Route::get('/tabelChi', [nilaiController::class, 'getChiSqure']);
Route::post('/tabelChi', [nilaiController::class, 'calculateChiSqure'])->name('chi');


