<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
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
            'nombre'=>'required|max:255',
            'telefono'=>'required|max:70',
            'email'=>'required|max:70',
            'ciudad'=>'required|max:150',
            'contenido'=>'required',
            'renta'=>'required',
        ];
    }
}
