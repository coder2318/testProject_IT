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
            'file' => 'required|file',
            'country' => 'required',
            'resume' => 'required',
            'file2' => 'required|file',
            'file3' => 'required|file',
            'phone' => 'required',
            'email' => 'required|email',
        ];
    }
}