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
    return view('auth.registration');
})->name('registration');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/user', function () {
        return view('user');
    })->name('user');
});

Route::group(['middleware' => ['guest']], function () {


    Route::get('/login', function () {
        return view('auth.authorization');
    })->name('login');

    Route::post('/login/auth', [\App\Http\Controllers\UserController::class, 'auth'])->name('authz');
});

Route::post('/registration/save', [\App\Http\Controllers\UserController::class, 'store'])->name('registration');
Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');



