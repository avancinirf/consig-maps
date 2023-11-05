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

Auth::routes(['verify' => true]);

Route::prefix('/app')->middleware(['auth', 'verified'])->group(function() {
    Route::get('/', function() { return redirect('/app/dashboard'); });
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get('/teste', [App\Http\Controllers\HomeController::class, 'teste'])->middleware('is_admin')->name('teste');

    Route::prefix('/user')->group(function() {
        Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('user.datatable');
        Route::post('/createdatatable', [App\Http\Controllers\UserController::class, 'createDataTable'])->name('user.createDataTable');
        Route::get('{id}/mymap', [App\Http\Controllers\HomeController::class, 'mymap'])->name('teste');
    })->where('id', '[0-9]+');
});
