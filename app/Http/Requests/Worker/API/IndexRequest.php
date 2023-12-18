<?php

namespace App\Http\Requests\Worker\API;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
            'name' => 'nullable|string',
            'surname' => 'nullable|string',
            'email' => 'nullable|email',
            'from' => 'nullable|integer',
            'to' => 'nullable|integer',
            'description' => 'nullable|string',
            'is_married' => 'nullable|string',
        ];
    }


    public function messages()
    {
        return [
            'from.integer' => 'Это поле должно быть числом',
            'to.integer' => 'Это поле должно быть числом',
        ];
    }
}
