<?php

namespace App\Http\Requests\Application;

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
            'passport_date' => 'nullable',
            'application_number' => 'required',
            'passport_expire' => 'required',
            'expire_date' => 'required',
            'status' => 'required',
            'register_date' => 'required',
            'reletion_level.*' => 'nullable',
            'reletion_fio.*' => 'nullable',
            'reletion_birth.*' => 'nullable',
            'reletion_citizen.*' => 'nullable',
        ];
    }
}
