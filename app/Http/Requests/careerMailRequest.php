<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class careerMailRequest extends FormRequest
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
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'contact_number' => 'required|numeric',
            'position' => 'required|max:255',
            'branch' => 'required|in:construction,ict',
            'email' => 'required|email:rfc,dns',
            'cover_letter' => 'required|max:600',
            'attachment' => 'max:4000|mimes:pdf',
            'g-recaptcha-response' => 'recaptcha'
        ];
    }
}
