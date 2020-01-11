<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Employee;

class CreateEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'       => 'required',
            'last_name'  => 'required',
            'company_id' => 'required|exists:companies,id',
            'email'      => 'nullable|email',
            'phone'      => 'nullable',
        ];
    }

    public function handle()
    {

        Employee::create([
            'name'       => $this->name,
            'last_name'  => $this->last_name,
            'company_id' => $this->company_id,
            'email'      => $this->email,
        ]);

        return true;
    }
}
