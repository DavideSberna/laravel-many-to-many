<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePostRequest extends FormRequest
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
            'title' => 'required|unique:posts|max:150|min:3',
            'image' => 'nullable',
            'description' => 'required|min:3',
            'programming_language' => 'required|max:20|min:1',
            'difficulty' => 'nullable',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'nullable|exists:tags,id'
        ];
    }

    public function messages()
    {
        return [

            'title.required' => 'Il titolo è obbligatorio',
            'title.unique:posts' => 'Questo titolo è già stato utilizzato',
            'title.max' => 'Il titolo deve essere inferiore a 150 caratteri',
            'title.min' => 'Il titolo deve essere maggiore di 3 caratteri',

            'description.required' => 'La descrizione è obbligatoria',
            'description.min' => 'La descrizione deve essere maggiore di 3 caratteri',
            
            'programming_language.required' => 'Il linguaggio utilizzato è obbligatorio',
            'programming_language.max' => 'Il linguaggio utilizzato deve essere inferiore di 20 caratteri',
            'programming_language.min' => 'Il linguaggio utilizzato deve essere maggiore di 3 caratteri',
        ];
    }
}
