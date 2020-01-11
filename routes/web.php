<?php

// Public Routes
Route::get('/','WelcomeController');
Auth::routes(['register' => false]);

// Protected Routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/employees', 'EmployeesController@index')->name('employees.index');
    Route::get('/employees/create', 'EmployeesController@create')->name('employees.create');
    Route::post('/employees', 'EmployeesController@create')->name('employees.store');
    Route::get('/employees/{employee}', 'EmployeesController@show')->name('employees.show');
    Route::delete('/employees/{employee}', 'EmployeesController@destroy')->name('employees.destroy');

    Route::get('/companies', 'CompaniesController@index')->name('companies.index');
    Route::get('/companies/create', 'CompaniesController@create')->name('companies.create');
    Route::post('/companies', 'CompaniesController@store')->name('companies.store');
    Route::get('/companies/{company}', 'CompaniesController@show')->name('companies.show');
    Route::delete('/companies/{company}', 'CompaniesController@destroy')->name('companies.destroy');

    // Datatables
    Route::get('datatables/companies', 'Datatables\CompaniesDatatablesController@index');
    Route::get('datatables/employees', 'Datatables\EmployeesDatatablesController@index');

});

