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



Route::get('/login', function () {
    return view('pages/auth/login');
})->name('login');
Route::get('/register', function () {
    return view('pages/auth/register');
})->name('register');
Route::get('/forgot-password', function () {
    return view('pages/auth/forgot-password');
})->name('forgot-password');


Route::get('/dashboard', function () {
    return view('pages/dashboard/index');
})->name('dashboard');
Route::get('/top-up', function () {
    return view('pages.top-up.top-up');
})->name('top-up');
Route::get('/pbob', function () {
    return view('pages.pbob.pbob');
})->name('pbob');

Route::get('/transaksi', function () {
    return view('pages.transaksi.transaksi');
})->name('transaksi');


Route::group(['prefix' => 'manage', 'as' => 'manage'], function() {
    Route::get('/role', function () {
        return view('pages.manage.role.role');
    })->name('role');

    Route::get('/users', function () {
        return view('pages.manage.user.user');
    })->name('users');
   
});
