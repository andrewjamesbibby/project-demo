<?php

namespace App\Http\Controllers;

use App\Company;

class CompaniesController extends Controller
{
    public function index()
    {
        return view('companies.index');
    }

    public function show(Company $company)
    {
        return view('companies.show');
    }

    public function destroy(Company $company)
    {
        $company->delete();
    }
}
