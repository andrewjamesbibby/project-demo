<?php

// Public Routes
Route::get('/','WelcomeController');
Auth::routes(['register' => false]);

// Protected Routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});


