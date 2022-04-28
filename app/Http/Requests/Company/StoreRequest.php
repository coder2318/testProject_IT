<?php

namespace App\Http\Requests\Company;

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
            'name' => 'required',
            'person_fio' => 'required',
            'activity' => 'required',
            'count_staffs' => 'required|numeric',
            'phone' => 'required',
            'other' => 'nullable',
            'email' => 'required|email'
        ];
    }
}