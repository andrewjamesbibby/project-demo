<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
use App\Company;

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

    /**
     * Handle
     *
     * Handles the request - creates new company record
     *
     * @return bool
     */
    public function handle()
    {
        $company = new Company();
        $company->name = $this->name;
        $company->email = $this->email;
        $company->website = $this->website;

        if($this->file('logo')){
            $company->logo = $this->storeLogo();
        }

        if($company->save()){
            return true;
        }

        return false;
    }

    /**
     * Store Logo
     *
     * Persists an uploaded logo to storage
     *
     * @return string
     */
    private function storeLogo()
    {
        $uploadedFile = $this->file('logo');
        $filename = time() . '_' . $uploadedFile->getClientOriginalName();

        Storage::disk('local')->putFileAs(
            'public/logos/',
            $uploadedFile,
            $filename
        );

        return $filename;
    }

}
