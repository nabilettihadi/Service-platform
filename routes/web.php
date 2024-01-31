<?php

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

use App\Http\Controllers\ServiceController;

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');

Route::post('/services', [ServiceController::class, 'store'])->name('services.store');

Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');