<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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

            //admitir que el nombre tenga tildes
            'name' => 'required|string|max:255|min:7|alpha:ascii',
            'email' => 'required|email|min:8|max:255|unique:users,email',
            'password' => 'required|string|min:8|max:255',

        ];
    }

    public function messages():array{
        return [
            'name.required'=>'El nombre es requerido',
            'name.string'=>'El nombre debe ser una cadena de caracteres',
            'name.max'=>'El nombre debe tener maximo 255 caracteres',
            'name.min'=>'El nombre debe tener minimo 7 caracteres',
            'name.alpha'=>'El nombre debe tener solo caracteres alfabeticos',
            'email.required'=>'El email es requerido',
            'email.email'=>'El correo electronico debe ser un email valido',
            'email.min'=>'El correo electronico debe tener minimo 8 caracteres',
            'email.max'=>'El correo electronico debe tener maximo 255 caracteres',
            'email.unique'=>'El correo electronico ya existe',
            'password.required'=>'La contraseña es requerida',
            'password.string'=>'La contraseña debe ser una cadena de caracteres',
            'password.min'=>'La contraseña debe tener minimo 8 caracteres',
            'password.max'=>'La contraseña debe tener maximo 255 caracteres'
        ];
    }
    
}
