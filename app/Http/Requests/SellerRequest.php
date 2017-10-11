<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellerRequest extends FormRequest
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
            'rut'=>'required|max:20',
            'nombre'=>'required|max:20',
            'apellido'=>'required|max:20',
            'movil'=>'nullable|max:255',
            'fijo'=>'nullable|max:255',
            'email'=>'required|max:20',
            'isapre'=>'required',
        ];
    }
}
