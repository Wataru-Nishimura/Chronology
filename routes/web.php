<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChronologyController;

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
Route::get('/', function() {
    return view('homes/home');
});

Route::get('/chronology', function() {
    return view('chronologies/chronology');
});

Route::get('/chronology', [ChronologyController::class, 'chronology']);

Route::get('/genre', function() {
    return view('chronologies/genre');
});

Route::get('/genre', [ChronologyController::class, 'genre']);

Route::get('/period', function() {
    return view('chronologies/period');
});

Route::get('/period', [ChronologyController::class, 'period']);

Route::get('/create', [ChronologyController::class, 'add']);

Route::post('/create', [ChronologyController::class, 'create']);

Route::get('/login', function() {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
