<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class ObservationStoreRequest extends FormRequest
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
            'message' => 'required|string|max:255|min:10',
            'computer' => 'required',
            'owner' => 'required'
        ];
        
    }

    public function messages():array{
        return [
            'message.required'=>'El mensaje es requerido',
            'message.string'=>'El mensaje debe ser una cadena de caracteres',
            'message.max'=>'El mensaje debe tener maximo 255 caracteres',
            'message.min'=>'El mensaje debe tener minimo 10 caracteres',
            'computer.required'=>'la observacion debe pertenecer a un computador',
            'owner.required'=>'la observacion debe tener un propietario'
        ];
    }
}
