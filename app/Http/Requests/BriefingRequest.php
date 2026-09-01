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
        // Reject CR / LF / tab — header-injection guard while on the EOL
        // Laravel 10 branch (CVE-2026-48019, patched only in Laravel 12.61+).
        $noCrlf = 'not_regex:/[\r\n\t]/';

        return [
            'name'            => ['required', 'string', 'max:120', $noCrlf],
            'role'            => ['nullable', 'string', 'max:120', $noCrlf],
            'org'             => ['required', 'string', 'max:160', $noCrlf],
            'email'           => ['required', 'string', 'email:strict', 'max:190', $noCrlf],
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
