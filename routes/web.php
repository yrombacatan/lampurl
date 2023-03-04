<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;

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

Route::get('/app', [UrlController::class, 'create'])->name('url.create');
Route::post('/app', [UrlController::class, 'store'])->name('url.store');
Route::get('/{id}', [UrlController::class, 'index'])->name('url.index');
Route::fallback(function() {
    return redirect()->route('url.create');
});