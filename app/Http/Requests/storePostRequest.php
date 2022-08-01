<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storePostRequest extends FormRequest
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
            'name' => 'required|unique:posts|max:255',
            'description' => 'required|max:255',
            'category_id' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => "A name is required!",
            'description.required' => 'A description is required!'
        ];
    }
}
