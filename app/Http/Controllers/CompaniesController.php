<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompanyRequest;
use App\Company;

class CompaniesController extends Controller
{
    public function index()
    {
        return view('companies.index');
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(CreateCompanyRequest $request)
    {
        if($request->handle()){
            return response()->redirectToRoute('companies.index');
        }
    }

    public function show()
    {
        return view('companies.show');
    }

    public function destroy(Company $company)
    {
        $company->delete();
    }
}
