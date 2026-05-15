<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
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

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
Route::post('/teams', [TeamController::class, 'store'])->name('teams.store');
Route::delete('/teams/{id}', [TeamController::class, 'destroy'])->name('teams.destroy');
Route::put('/teams/{id}', [TeamController::class, 'update'])->name('teams.update');
Route::get('/teams/{id}', [TeamController::class, 'edit'])->name('teams.edit');
