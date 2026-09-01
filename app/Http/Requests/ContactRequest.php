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
        // `no_crlf` rejects carriage-return / line-feed / tab — a manual guard
        // against header injection while this project sits on the EOL Laravel 10
        // branch (see CVE-2026-48019, fixed only in Laravel 12.61+).
        $noCrlf = 'not_regex:/[\r\n\t]/';

        return [
            'name'                => ['required', 'string', 'max:120', $noCrlf],
            'org'                 => ['nullable', 'string', 'max:160', $noCrlf],
            'email'               => ['required', 'string', 'email:strict', 'max:190', $noCrlf],
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
