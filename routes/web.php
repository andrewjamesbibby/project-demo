<?php

// Public Routes
Route::get('/','WelcomeController');
Auth::routes(['register' => false]);

// Protected Routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/employees', 'EmployeesController@index')->name('employees');

    Route::get('/companies', 'CompaniesController@index')->name('companies');
    Route::get('/companies/{company}', 'CompaniesController@show')->name('companies.show');
    Route::delete('/companies/{company}', 'CompaniesController@destroy')->name('companies.destroy');

    // Datatables
    Route::get('datatables/companies', 'Datatables\CompaniesDatatablesController@index');
    Route::get('datatables/employees', 'Datatables\EmployeesDatatablesController@index');

});

