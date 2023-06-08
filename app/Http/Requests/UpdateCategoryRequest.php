<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdateCategoryRequest extends FormRequest
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
            'name' => [
                'required',
                 Rule::unique('categories')->ignore($this->categorie),
                'max:60',
                'min:3'
            ],
        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'Il nome Category è obbligatorio',
            'name.max' => 'Il nome Category deve essere inferiore a 150 caratteri',
            'name.min' => 'Il nome Category deve essere maggiore di 3 caratteri',
        ];
    }
}
