<?php

namespace App\Http\Requests\Investor;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'file4' => 'required|file|max:5100',
            'file5' => 'required|file|max:5100',
            'adress' => 'required',
            'phone' => 'required',
            'project' => 'required',
            'activity' => 'required',
            'file' => 'required|file|max:5100',
            'file2' => 'required|file|max:5100',
            'file3' => 'required|file|max:5100',
            'applicant_fio' => 'required',
            'applicant_position' => 'required',
            'applicant_phone_number' => 'required',
            'conditions' => 'required',
            'visa_date' => 'required',
            'additional_phone' => 'required',
            'reletion_level.*' => 'nullable',
            'reletion_fio.*' => 'nullable',
            'reletion_birth.*' => 'nullable',
            'reletion_citizen.*' => 'nullable',
            'file6.*' => 'nullable|file',

        ];
    }
}
