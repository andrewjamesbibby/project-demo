<?php

namespace App\Http\Controllers\Datatables;

use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use App\Audit;

class LogsDatatablesController extends Controller
{
    public function __invoke()
    {
        $audit = Audit::all();

        return Datatables::of($audit)
            ->editColumn('action', function($audit){
                return strtoupper(explode('_', $audit->name)[0]);
            })
            ->escapeColumns([])
            ->make(true);
    }
}
