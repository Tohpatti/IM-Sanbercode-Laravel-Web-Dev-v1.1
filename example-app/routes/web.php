<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;
use App\Http\Controllers\PageController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/cast', [CastController::class, 'index'])->name('cast.index');

Route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');

Route::post('/cast', [CastController::class, 'store'])->name('cast.store');

Route::get('/cast/{id}', [CastController::class, 'show'])->name('cast.show');

Route::get('/cast/{id}/edit', [CastController::class, 'edit'])->name('cast.edit');

Route::put('/cast/{id}', [CastController::class, 'update'])->name('cast.update');

Route::delete('/cast/{id}', [CastController::class, 'destroy'])->name('cast.destroy');


Route::get('/', [PageController::class, 'simple_tables'])->name('simple-tables');

Route::get('/data-tables', [PageController::class, 'data_tables'])->name('data-tables');


// Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/register', [AuthController::class, 'registrationForm'])->name('register');

// Route::post('/register', [AuthController::class, 'showGreetings'])->name('greeting');