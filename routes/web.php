<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::controller(UserController::class)
    ->prefix('users')
    ->group(function()
    {
        Route::get('/', 'show')->name('list');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit');
    }
);

Route::resource('users', UserController::class)->only(['store', 'update', 'destroy']);

Route::get('/', function() {
    return redirect()->route('list');
});
