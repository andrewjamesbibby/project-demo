<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function __invoke()
    {
        return view('logs.index');
    }
}
