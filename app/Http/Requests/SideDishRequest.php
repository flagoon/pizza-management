<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SideDishRequest extends FormRequest
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
            'side_dish_name' => 'required|min:3',
            'side_dish_type_id' => 'required|integer',
            'side_dish_volume' => 'nullable',
            'side_dish_description' => 'nullable|min:3',
            'side_dish_price' => 'required'
        ];
    }
}
