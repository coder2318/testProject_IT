<?php

namespace App\Http\Requests\SpecialistRelocation;

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
            'specialization' => 'required',
            'skills' => 'required',
            'prof_level' => 'required',
            'link_portfolio' => 'nullable',
            'contact_number' => 'required',
            'city' => 'required',
            'employment' => 'nullable',
            'employment_other' => 'required_if:employment,==,other',
            'file' => 'nullable'
        ];
    }
}
