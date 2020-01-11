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
            ->editColumn('email', function($employee) {
                return "<a href='mailto:" . $employee->email . "'>" . $employee->email . "</a>";
            })
            ->editColumn('phone', function($employee) {
                return "<a href='tel:" . $employee->phone . "'>" . $employee->phone . "</a>";
            })
            ->addColumn('actions', function($employee){
                return '
                    <div class="d-flex justify-content-center">
                        <a href="employees/' . $employee->id . '" class="btn btn-sm btn-primary ml-1 view" type="button">
                            <i class="fa fa-eye"></i>
                        </a>
                        <button class="btn btn-sm btn-danger ml-1 delete" type="button">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                ';
            })
            ->escapeColumns([])
            ->make(true);
    }
}
