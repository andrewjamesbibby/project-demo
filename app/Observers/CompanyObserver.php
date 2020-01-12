<?php

namespace App\Observers;

use App\Mail\NewCompanyMail;
use App\Company;
use Mail;

class CompanyObserver
{
    /**
     * Handle the Company "created" event.
     *
     * @param  \App\Company  $company
     * @return void
     */
    public function created(Company $company)
    {
        Mail::to('test@test.com')->send(new NewCompanyMail($company));
    }

}
