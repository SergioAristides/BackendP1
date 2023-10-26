<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
            'type'=>'required|max:180|min:3|string|alpha:ascii',
        ];
    }


    public function messages(): array
    {
        return [
            'type.required' => 'el campo tipo es rquerido',
            'type.min' => 'el campo tipo debe tener una longitud minima de 3 letras',
            'type.max' => 'el campo tipo tiene un maximo de 180 letras',
            'type.string' => 'solo se permiten letras en el campo tipo',
            'type.alpha' => 'solo se permiten letras alfabeticas en el campo tipo',
        ];
    }
}
