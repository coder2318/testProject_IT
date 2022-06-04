<?php

namespace App\Http\Requests\SpecialistVisa;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'fio' => 'required',
            'date_birth' => 'required',
            'sex' => 'required',
            'citizen' => 'required',
            'passport_number' => 'required',
            'passport_date' => 'required',
            'passport_expire' => 'required',
            'file4' => 'nullable',
            'adress' => 'required',
            'phone' => 'required',
            'additional_phone' => 'required',
            'file5' => 'nullable',
            'company_name' => 'required',
            'adress_specialist' => 'required',
            'file' => 'nullable',
            'phone_specialist' => 'required',
            'file2' => 'nullable',
            'file3' => 'nullable',
            'applicant_fio' => 'required',
            'applicant_position' => 'required',
            'applicant_phone_number' => 'required',
            'visa_date' => 'required',
            'conditions' => 'required',
            'reletion_level.*' => 'nullable',
            'reletion_fio.*' => 'nullable',
            'reletion_birth.*' => 'nullable',
            'reletion_citizen.*' => 'nullable',
            'file6.*' => 'nullable',
        ];
    }
}
