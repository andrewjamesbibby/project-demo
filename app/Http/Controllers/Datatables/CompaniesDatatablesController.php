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
            ->addColumn('actions', function($company){
                return '
                    <div class="d-flex justify-content-center">
                        <a href="companies/' . $company->id . '" class="btn btn-sm btn-primary ml-1 view" type="button">view</a>
                        <button class="btn btn-sm btn-danger ml-1 delete" type="button">delete</button>
                    </div>
                ';
            })
            ->escapeColumns([])
            ->make(true);
    }
}
