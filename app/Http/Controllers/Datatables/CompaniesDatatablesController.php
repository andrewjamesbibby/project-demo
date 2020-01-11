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
            ->editColumn('email', function($company) {
                return "<a href='mailto:" . $company->email . "'>" . $company->email . "</a>";
            })
            ->addColumn('actions', function($row){
                return '
                    <button class="btn btn-sm btn-primary view" type="button">view</button>
                    <button class="btn btn-sm btn-danger delete" type="button">delete</button>
                ';
            })
            ->escapeColumns([])
            ->make(true);
    }
}
