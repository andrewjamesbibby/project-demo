<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateLanguageRequest;

class LanguagesController extends Controller
{
    public function __invoke(UpdateLanguageRequest $request)
    {
        if($request->handle()){
            return redirect()->back();
        }
    }
}
