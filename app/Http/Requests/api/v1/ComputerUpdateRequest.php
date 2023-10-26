<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class ComputerUpdateRequest extends FormRequest
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
            'brand' => 'required|string|max:20|min:2|alpha:ascii',
            'ram' => 'required|numeric|between:1,1024',
            'cpu' => 'required|string|max:30|min:2|alpha_num:ascii',
           
        ];
        
    }
}
