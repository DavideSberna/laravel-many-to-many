<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCategoryRequest extends FormRequest
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
            'name' => 'required|unique:categories|max:150|min:3',
        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'Il nome Category è obbligatorio',
            'title.unique:categories' => 'Questo titolo è già stato utilizzato',
            'name.max' => 'Il nome Category deve essere inferiore a 150 caratteri',
            'name.min' => 'Il nome Category deve essere maggiore di 3 caratteri',
        ];
    }
}
