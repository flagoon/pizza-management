<?php

namespace App\Http\Requests;

use App\Model\Category;
use Illuminate\Foundation\Http\FormRequest;

class PizzaRequest extends FormRequest
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

        $categoryMaxId = Category::all()->max()->id;
        $rules = [
            'pizza_name' => 'required|min:3|unique:pizzas,pizza_name',
            'pizza_description' => 'nullable|min:3',
            'pizza_spiciness' => 'required|min:0|max:3',
            'pizza_category' => 'required|min:1|max:' . $categoryMaxId,
            'ingredients.*' => 'required',
            'pizza_price.*' => 'required|integer'
        ];
        // TODO: Validation for update should exclude uniqueness.
        return $rules;
    }

    /**
     * Custom messages for rules
     *
     * @return array
     */
    public function messages()
    {
        $messages = [
            'ingredients.min' => 'Pizza should have at least 3 ingredients!'
        ];

        return $messages;
    }
}
