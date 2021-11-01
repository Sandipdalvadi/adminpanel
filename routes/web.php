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
    return view('admin.dashboard.dashboard'); 
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard.dashboard'); 
    })->name('dashboard');
    Route::get('/settings/form', [App\Http\Controllers\SettingsController::class, 'form'])->name('settings.form');
    Route::post('/settings/store', [App\Http\Controllers\SettingsController::class, 'store'])->name('settings.store');
});
