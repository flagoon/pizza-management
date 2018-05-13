<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngredientRequest extends FormRequest
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
            'ingredient_name' => 'required|min:3|unique:ingredients,ingredient_name'
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'ingredient_name.required' => 'Name is required!',
            'ingredient_name.min' => 'At least 3 characters!',
            'ingredient_name.unique' => 'Ingredient name should be unique!'
        ];
    }
}
