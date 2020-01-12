<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeeRequest;
use App\Employee;
use App\Company;

class EmployeesController extends Controller
{
    public function index()
    {
        return view('employees.index');
    }

    public function create()
    {
        $companies = Company::select('id', 'name')->get();
        return view('employees.create', ['companies' => $companies]);
    }

    public function store(CreateEmployeeRequest $request)
    {
        if($request->handle()){
            return response()->redirectToRoute('employees.index');
        }
    }

    public function show(Employee $employee)
    {
        return view('employees.show', ['employee' => $employee]);
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
    }
}
