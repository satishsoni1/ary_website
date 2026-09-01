<?php

namespace App\Http\Controllers;

use App\Http\Requests\BriefingRequest;
use App\Http\Requests\ContactRequest;
use App\Models\ContactSubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function submitContact(ContactRequest $request): RedirectResponse
    {
        $this->store('contact', $request->validated(), $request);

        return back()
            ->with('status.contact', 'Thank you — your message has been received. We read every note ourselves and will reply by email.')
            ->withFragment('top');
    }

    public function submitBriefing(BriefingRequest $request): RedirectResponse
    {
        $this->store('briefing', $request->validated(), $request);

        return back()
            ->with('status.briefing', 'Request received. A founder will be in touch to arrange your briefing.')
            ->withFragment('brief');
    }

    private function store(string $kind, array $data, $request): void
    {
        $record = ContactSubmission::create([
            'kind'         => $kind,
            'name'         => $data['name'],
            'email'        => $data['email'],
            'organisation' => $data['org'] ?? null,
            'role'         => $data['role'] ?? null,
            'message'      => $data['message'] ?? $data['interest'] ?? null,
            'ip'           => $request->ip(),
            'user_agent'   => substr((string) $request->userAgent(), 0, 255),
        ]);

        // No transactional mail backend is wired up yet — leave a trail in the log
        // so submissions are never silently lost before SMTP is configured.
        Log::channel('stack')->info('New '.$kind.' submission', [
            'id'    => $record->id,
            'name'  => $record->name,
            'email' => $record->email,
            'org'   => $record->organisation,
        ]);
    }
}
