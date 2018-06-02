<?php

namespace App\Http\Requests;

use App\Model\PizzaSize;
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
        $rules = ['ingredient_description' => 'nullable|min:3'];
        foreach(PizzaSize::all() as $pizzaSize) {
            $rules += ['size_' . $pizzaSize->id => 'regex:/^\d*(\.\d{1,2})?$/|required'];
        }
        switch ($this->method()) {
            case 'POST':
                $rules += ['ingredient_name' => 'required|min:3|unique:ingredients,ingredient_name'];
                break;
            case 'PUT':
            case 'PATCH':
            $rules += ['ingredient_name' => 'required|min:3|unique:ingredients,ingredient_name,' . $this->id];
                break;
            default:
                return [];
        }
        return $rules;
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        $messages = [
            'ingredient_name.required' => 'Name is required!',
            'ingredient_name.min' => 'At least 3 characters!',
            'ingredient_name.unique' => 'Ingredient name should be unique!'
        ];

        foreach(PizzaSize::all() as $pizzaSize) {
            $messages += [ 'size_' . $pizzaSize->id . '.regex' => 'Price for ' . $pizzaSize->size_name . ' should be a number!'];
            $messages += [ 'size_' . $pizzaSize->id . '.required' => 'Price for ' . $pizzaSize->size_name . ' size is required!'];
        }

        return $messages;
    }
}
