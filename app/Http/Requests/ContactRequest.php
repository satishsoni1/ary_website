<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'                => ['required', 'string', 'max:120'],
            'org'                 => ['nullable', 'string', 'max:160'],
            'email'               => ['required', 'email:rfc', 'max:190'],
            'message'             => ['required', 'string', 'max:4000'],
            // Honeypot — must stay empty.
            'company_website'     => ['nullable', 'prohibited'],
        ];
    }

    public function attributes(): array
    {
        return ['org' => 'organisation'];
    }

    public function messages(): array
    {
        return ['company_website.prohibited' => 'Your submission looked automated. Please email us directly.'];
    }
}
