<?php

namespace App\Http\Requests\SpecialistVisa;

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
            'file4' => 'required|mimes:pdf,docx,xlsx,jpg,jpeg,png,bmp|max:5100',
            'adress' => 'required',
            'phone' => 'required',
            'additional_phone' => 'required',
            'file5' => 'required|file|mimes:pdf,docx,xlsx,jpg,jpeg,png,bmp|max:5100',
            'company_name' => 'required',
            'adress_specialist' => 'required',
            'file' => 'required|file|mimes:pdf,docx,xlsx,jpg,jpeg,png,bmp|max:5100',
            'phone_specialist' => 'required',
            'file2' => 'required|file|mimes:pdf,docx,xlsx,jpg,jpeg,png,bmp|max:5100',
            'file3' => 'required|file|mimes:pdf,docx,xlsx,jpg,jpeg,png,bmp|max:5100',
            'applicant_fio' => 'required',
            'applicant_position' => 'required',
            'applicant_phone_number' => 'required',
            'visa_date' => 'required',
            'conditions' => 'required',
            'reletion_level.*' => 'nullable',
            'reletion_fio.*' => 'nullable',
            'reletion_birth.*' => 'nullable',
            'reletion_citizen.*' => 'nullable',
            'file6.*' => 'nullable|file|mimes:pdf,docx,xlsx,jpg,jpeg,png,bmp|max:5100',
        ];
    }
}
