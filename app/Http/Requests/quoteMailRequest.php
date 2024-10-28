<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class quoteMailRequest extends FormRequest
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
            'company' => 'required|max:255',
            'position' => 'required|max:255',
            'branch' => 'required|in:construction,ict',
            'email' => 'required|email:rfc,dns',
            'scope' => 'required|max:1000',
            'attachment' => 'max:4000|mimes:pdf',
            'g-recaptcha-response' => 'recaptcha'
        ];
    }
}
