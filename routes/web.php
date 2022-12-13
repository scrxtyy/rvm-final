<?php

use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', 'App\Http\Controllers\DataController@selectLastPlastic')->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/monitor/pet', [App\Http\Controllers\LogController::class, 'plasticsTable'])->middleware(['auth'])->name('monitor.pet');
Route::get('/monitor/tincans', [App\Http\Controllers\LogController::class, 'cansTable'])->middleware(['auth'])->name('monitor.tincans');

//Route::get('/monitor/pet', [App\Http\Controllers\DataController::class, ''])->middleware(['auth'])->name('monitor.pet');

//Route::get('monitor/pet', [LogController::class, 'plasticsTable']);

// Route::get('/dashboard', function () {
//     [App\Http\Controllers\DataController::class,'selectLastPlastic'];
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/monitor/pet', function () {
//     return view('monitor.petbottles');
// })->middleware(['auth'])->name('monitor.pet');

// Route::get('/monitor/tincans', function () {
//     return view('monitor.tincans');
// })->middleware(['auth'])->name('monitor.tincans');

Route::get('/coins', function () {
    return view('monitor.coins');
})->middleware(['auth'])->name('coins');

require __DIR__ . '/auth.php';
