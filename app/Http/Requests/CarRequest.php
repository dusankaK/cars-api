<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'brand' => 'required|min:2|max:255',
            'model' => 'required|min:2|max:255',
            'year' => 'numeric|required',
            'isAutomatic' => 'required',
            'engine' => 'required|max:255',
            'numberOfDoors' => 'required|numeric|min:2|max:6',
            'maxSpeed' => 'numeric|min:20|max:300'
        ];
    }
}
