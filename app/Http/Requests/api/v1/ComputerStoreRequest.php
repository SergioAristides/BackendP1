<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class ComputerStoreRequest extends FormRequest
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
            'name' => 'required|string|max:10|min:3|alpha:ascii',
            'brand' => 'string|max:20|min:2|alpha:ascii',
            'ram' => 'numeric|between:1,1024',
            'cpu' => 'string|max:30|min:2|alpha_num:ascii',
            'owner' => 'numeric',
        ];
    }
    public functions messages ():array{
        'name.required'=>'El nombre es requerido',
        'name.string'=>'El nombre debe ser una cadena de caracteres',
        'name.max'=>'El nombre debe tener maximo 10 caracteres',
        'name.min'=>'El nombre debe tener minimo 3 caracteres',
        'name.alpha'=>'El nombre debe tener solo caracteres alfabeticos',
        'brand.string'=>'La marca debe ser una cadena de caracteres',
        'brand.max'=>'La marca debe tener maximo 20 caracteres',
        'brand.min'=>'La marca debe tener minimo 2 caracteres',
        'brand.alpha'=>'La marca debe tener solo caracteres alfabeticos',
        'ram.numeric'=>'La ram debe ser un numero',
        'ram.between'=>'La ram debe estar entre 1 y 1024',
        'cpu.string'=>'La cpu debe ser una cadena de caracteres',
        'cpu.max'=>'La cpu debe tener maximo 30 caracteres',
        'cpu.min'=>'La cpu debe tener minimo 2 caracteres',
        'cpu.alpha_num'=>'La cpu debe tener solo caracteres alfanumericos',
        'owner.numeric'=>'El owner debe ser un numero',
    
    }
}
