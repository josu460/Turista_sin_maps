<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarU extends FormRequest
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
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email|unique:users,email,',
            'telefono' => 'nullable|string|max:20',
            'password' => 'required|string|max:255|min:8,',
        ];
    }
}
