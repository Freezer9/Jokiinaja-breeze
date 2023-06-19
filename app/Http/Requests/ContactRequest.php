<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'complaint_type' => ['required', 'min:6', 'alpha'],
            'phone_number' => ['required', 'min:8', 'numeric'],
            'email' => ['required', 'email',],
            'invoice_name' => ['required', 'min:22'],
            'complaint_details' => ['required', 'min:20']
        ];
    }
}
