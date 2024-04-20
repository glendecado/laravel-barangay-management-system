<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'pages.about');




Route::post('/login/submit', [UserController::class, 'login'])->name('login');

Route::get('/login', [UserController::class, 'viewlogin'])->middleware('redirect');



Route::middleware(['auth'])->group(function () {

    Route::view('/resident', 'pages.resident')->name('Resident');

    Route::middleware(['admin'])->group(function () {
        Route::view('/admin', 'pages.admin.admin')->name('admin');
    });

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});
