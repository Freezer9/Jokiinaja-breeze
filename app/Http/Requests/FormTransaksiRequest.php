<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormTransaksiRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'nickname' => ['required', 'min:3'],
            'password' => ['required', 'min:5'],
            'notes' => ['required', 'min:8'],
            'phone_number' => ['required', 'min:8', 'numeric'],
        ];
    }
}
