<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ContactoController;

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
    return redirect()->route('library.index');
});
Route::resource('library', LibraryController::class)->except(['show']);
Route::resource('contactos', ContactoController::class)->except(['show']);