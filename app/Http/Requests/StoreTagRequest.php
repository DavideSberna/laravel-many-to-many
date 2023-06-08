<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTagRequest extends FormRequest
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
            'name' => 'required|unique:tags|max:50|min:2',
        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'Il campo Tag è obbligatorio',
            'name.unique:tags' => 'Questo tag è già stato utilizzato',
            'name.max' => 'Il Tag deve essere inferiore a 50 caratteri',
            'name.min' => 'Il Tag deve essere maggiore di 2 caratteri',

        ];
    }
}
