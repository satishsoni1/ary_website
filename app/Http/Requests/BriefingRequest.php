<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BriefingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'            => ['required', 'string', 'max:120'],
            'role'            => ['nullable', 'string', 'max:120'],
            'org'             => ['required', 'string', 'max:160'],
            'email'           => ['required', 'email:rfc', 'max:190'],
            'interest'        => ['nullable', 'string', 'max:4000'],
            'company_website' => ['nullable', 'prohibited'],
        ];
    }

    public function attributes(): array
    {
        return ['org' => 'institution / department', 'interest' => 'briefing focus'];
    }

    public function messages(): array
    {
        return ['company_website.prohibited' => 'Your submission looked automated. Please email us directly.'];
    }
}
