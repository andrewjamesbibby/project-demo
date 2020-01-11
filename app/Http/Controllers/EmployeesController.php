<?php

namespace App\Http\Controllers;

use App\Employee;

class EmployeesController extends Controller
{
    public function index()
    {
        return view('employees.index');
    }

    public function show(Employee $employee)
    {
        return view('employees.show');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
    }
}
