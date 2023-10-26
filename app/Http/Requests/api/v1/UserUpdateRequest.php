<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|max:255|min:3|string|alpha:ascii',
            'email'=>'required|email|unique:users|min:8|max:255|alpha_dash:ascii_num',
            'password'=>'required|min:8|max:255'
        ];
    }


    public function messages(): array
    {
        return [
            'name.required' => 'el campo nombre es rquerido',
            'name.min' => 'el campo nombre debe tener una longitud minima de 7 letras',
            'name.max' => 'el campo nombre tiene un maximo de 255 letras',
            'name.string' => 'solo se permiten letras en el campo nombre',
            'name.alpha' => 'solo se permiten letras alfabeticas en el campo nombre',
            'email.required' => 'el email es requerido',
        ];
    }
}
