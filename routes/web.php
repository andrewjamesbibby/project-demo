<?php

// Public Routes
Route::get('/','WelcomeController');
Auth::routes(['register' => false]);

// Protected Routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/employees', 'EmployeesController@index')->name('employees');

    Route::get('/companies', 'CompaniesController@index')->name('companies');
});

