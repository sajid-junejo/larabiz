<?php

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

Auth::routes();
Route::resource('/listings',App\Http\Controllers\ListingsController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/listings/create', [App\Http\Controllers\ListingsController::class, 'create'])->name('create');
// Route::get('/listings/{id}/edit', [App\Http\Controllers\ListingsController::class, 'edit'])->name('edit');
// Route::put('/listings/{id}', [App\Http\Controllers\ListingsController::class, 'update']);
// Route::get('/listings/show', [App\Http\Controllers\ListingsController::class, 'show']);
// Route::get('/listings/index', [App\Http\Controllers\ListingsController::class, 'index'])->name('index');
Route::get('/',[App\Http\Controllers\ListingsController::class, 'index']);