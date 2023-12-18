<?php

namespace App\Http\Requests\Worker\API;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email',
            'age' => 'nullable|integer',
            'description' => 'nullable|string',
            'is_married' => 'nullable|boolean',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо заполнить',
            'name.string' => 'Это поле должно быть строкой',
            'surname.required' => 'Это поле необходимо заполнить',
            'surname.string' => 'Это поле должно быть строкой',
            'email.required' => 'Это поле необходимо заполнить',
            'email.email' => 'Это поле должно быть формата электроной почты',
            'age.integer' => 'Это поле должно быть числом',
            'description.string' => 'Это поле должно быть строкой',
            'is_married.string' => 'Это поле должно быть строкой',
        ];
    }
}
