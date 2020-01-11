<?php

namespace App\Http\Controllers\Datatables;

use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use App\Employee;

class EmployeesDatatablesController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        return Datatables::of($employees)
            ->setRowId(function($employee) {
                return $employee->id;
            })
            ->escapeColumns([])
            ->make(true);
    }
}
