<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;

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

Route::get('/computers', [ComputerController::class, 'index'])->Name('computers.index');

Route::get('/computers/create', function () {
    return view('create');
});

Route::get('/computers/{urlnaam}',[ComputerController::class, 'show']);

Route::get('/computers/{urlnaam}/edit',[ComputerController::class, 'edit']);

Route::post('/computers', [ComputerController::class, 'store'])->name('computers.store');
Route::delete('/computers/{id}', [ComputerController::class, 'destroy'])->name('computers.destroy');
Route::put('/computers/{id}', [ComputerController::class, 'update'])->name('computers.update');
