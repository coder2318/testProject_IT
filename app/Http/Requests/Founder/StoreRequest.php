<?php

namespace App\Http\Requests\Founder;

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
            'additional_phone' => 'required',
            'company_name' => 'required',
            'file2' => 'required|file|max:5100',
            'conditions' => 'required',
            'visa_date' => 'required',
            'reletion_level.*' => 'nullable',
            'reletion_fio.*' => 'nullable',
            'reletion_birth.*' => 'nullable',
            'reletion_citizen.*' => 'nullable',
            'file6.*' => 'nullable|file|max:5100',
            'reletion.*' => 'nullable'

        ];
    }
}
