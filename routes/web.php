<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)
    ->prefix('users')
    ->group(function()
    {
        Route::get('/all', 'index')->name('list');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/login', 'showLogin')->name('show.login');
        Route::post('/login', 'login')->name('login');
    }
);

Route::resource('users', UserController::class)->only(['store', 'update', 'destroy']);
