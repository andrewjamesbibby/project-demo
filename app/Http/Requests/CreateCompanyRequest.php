<?php

namespace App\Http\Requests;

use App\Company;
use Illuminate\Foundation\Http\FormRequest;

class CreateCompanyRequest extends FormRequest
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
            'name'    => 'required|max:100',
            'email'   => 'nullable|email|max:150',
            'website' => 'nullable|url|max:200',
            'logo'    => 'nullable|dimensions:min_width=100,min_height=100',
        ];
    }

    /**
     * Custom validation messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'logo.dimensions' => 'The logo dimensions must be of minimum 100 x 100',
        ];
    }

    public function handle()
    {
        Company::create([
            'name'    => $this->name,
            'email'   => $this->email,
            'website' => $this->website,
        ]);

        return true;
    }
}
