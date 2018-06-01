<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SideDishTypeRequest extends FormRequest
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
        dd($this->id);
        switch ($this->method()) {
            case 'POST':
                return [
                    'side_dish_type' => 'required|unique:side_dish_types,side_dish_name|min:3'
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    // TODO: I should have sent hidden input with ID
                    'side_dish_type' => 'required|unique:side_dish_types,side_dish_name'.$this->id.'id|min:3'
                ];
            default:
                return [];
        }

    }
}
