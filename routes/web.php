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

Route::get('/registration', function () {
    return view('auth.registration');
})->name('registration');

Route::get('/', [\App\Http\Controllers\CrosswordController::class, 'index'])->name('home');
Route::get('/crossword/{crossword}', [\App\Http\Controllers\CrosswordController::class, 'show'])->name('crossword_level');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/user', function () {
        return view('user');
    })->name('user');
    Route::get('/make', function () {
        return view('crossword.create_crossword');
    })->name('create_crossword');
    Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');
    Route::post('/make/store', [\App\Http\Controllers\CrosswordController::class, 'store'])->name('store_crossword');
});

Route::group(['middleware' => ['guest']], function () {

    Route::get('/login', function () {
        return view('auth.authorization');
    })->name('login');

    Route::post('/login/auth', [\App\Http\Controllers\UserController::class, 'auth'])->name('authz');
});

Route::post('/registration/save', [\App\Http\Controllers\UserController::class, 'store'])->name('registration');




