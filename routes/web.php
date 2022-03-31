<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StorieController;

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

Route::get('/',[StorieController::class , 'index','like'])->name('index');
Route::get('/elements',[StorieController::class , 'elements'])->name('elements');
Route::get('/generic',[StorieController::class , 'generic'])->name('generic');
Route::middleware(['login'])->group(function(){
    Route::get('/admin',[StorieController::class , 'admin'])->name('admin');
    Route::get('/admin/cree_poste',[StorieController::class , 'cree_poste'])->name('cree_poste');
    Route::post('/admin/cree_poste',[StorieController::class , 'store'])->name('cree_poste');
    Route::get('/admin/modifier_poste',[StorieController::class , 'modifier_poste'])->name('modifier_poste');
    
});

