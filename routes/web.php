<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;

//  jika user belum login
Route::resource('/registers', UserController::class);
Route::get('/register', function () {
    return view('register');
});
Route::post('/create', [UserController::class, 'store']);
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'dologin']);
});

// untuk admin dan user
Route::group(['middleware' => ['auth', 'checkrole:1,2']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);
});


// untuk admin
Route::group(['middleware' => ['auth', 'checkrole:1']], function () {
    Route::get('/admin', [adminController::class, 'admin']);
});

// untuk user
Route::group(['middleware' => ['auth', 'checkrole:2']], function () {
    Route::get('/user', [userController::class, 'user']);
});