<?php

namespace App\Http\Requests;

use App\Model\PizzaSize;
use Illuminate\Foundation\Http\FormRequest;

class PizzaSizeRequest extends FormRequest
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
        $pizzaSize = PizzaSize::find($this)[0];
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
                return [];
            case 'POST':
                return [
                        'size-name' => 'required|min:3|unique:pizza_sizes,size_name',
                        'size-value' => 'required'
                ];
            case 'PUT':
            case 'PATCH':
                    return [
                        'size-name' => 'required|min:3|unique:pizza_sizes,size_name,' . $pizzaSize->size_name . ',size_name',
                        'size-value' => 'required|integer'
                    ];
            default:
                return [
                    'size-name' => 'integer',
                    'size-value' => 'integer'
                ];
        }
    }

    public function messages()
    {
        return [
            'size-name.required' => 'Name is required!',
            'size-name.min' => 'At least 3 characters!',
            'size-name.unique' => 'Ingredient name should be unique!',
            'size-value' => 'Value is required!',
        ];
    }
}
