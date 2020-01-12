<?php

namespace App\Http\Controllers\Datatables;

use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use App\Company;

class CompaniesDatatablesController extends Controller
{
    public function __invoke()
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
                        <a href="companies/' . $company->id . '" class="btn btn-sm btn-primary ml-1 view" type="button">
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
