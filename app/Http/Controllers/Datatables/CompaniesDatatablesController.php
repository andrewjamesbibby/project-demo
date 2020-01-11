<?php

namespace App\Http\Controllers\Datatables;

use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use App\Company;

class CompaniesDatatablesController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return Datatables::of($companies)
            ->setRowId(function($company) {
                return $company->id;
            })
            ->escapeColumns([])
            ->make(true);
    }
}
