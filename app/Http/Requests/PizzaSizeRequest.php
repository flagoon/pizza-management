<?php

namespace App\Http\Requests;

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
        switch ($this->method()) {
            case 'POST':
                return [
                        'size_name' => 'required|min:3|unique:pizza_sizes,size_name',
                        'size_value' => 'required|integer'
                ];
            case 'PUT':
            case 'PATCH':
                    return [
                        'size_name' => 'required|min:3|unique:pizza_sizes,size_name,' . $this->id,
                        'size_value' => 'required|integer'
                    ];
            default:
                return [];
        }
    }

    public function messages()
    {
        return [
            'size_name.required' => 'Size name is required!',
            'size_name.min' => 'Size name should have least 3 characters!',
            'size_name.unique' => 'Size name should be unique!',
            'size_value.required' => 'Value is required!',
            'size_value.integer' => 'Value has to be an integer!'
        ];
    }
}
