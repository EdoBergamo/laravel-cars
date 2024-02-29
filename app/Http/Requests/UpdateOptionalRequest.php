<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOptionalRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'      => 'required|max:50|min:3',
            'price'     => 'required',
            'type'      => 'max:500',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome è obbligatorio',
            'name.max' => 'Il nome deve contenere al massimo 50 caratteri',
            'name.min' => 'Il nome deve contenere un minimo di 3 caratteri',
            'price.required' => 'The price is mandatory',
            'type.max' => 'You can enter a maximum of 500 characters',
        ];
    }
}
