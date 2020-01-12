<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Company;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stats = [
            'total_employees' => Employee::all()->count(),
            'total_companies' => Company::all()->count(),
        ];

        return view('dashboard', [ 'stats' => $stats ]);
    }
}
