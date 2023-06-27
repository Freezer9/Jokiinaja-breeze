<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellerRequest extends FormRequest
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
            'profile_name' => ['required', 'min:5', 'max:15'],
            'full_name' => ['required', 'min:5', 'max:20'],
            'address' => ['required', 'min:8'],
            'gender' => ['required', 'min:3'],
            'dob' => ['required'],
            'profile_description' => ['required', 'min:8'],
        ];
    }
}
