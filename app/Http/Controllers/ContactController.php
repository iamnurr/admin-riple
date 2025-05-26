<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactAdminNotification;
use App\Mail\ContactUserNotification;
use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $data['contacts'] = Contact::orderByDesc('created_at')
            ->paginate(20);

        return view('contacts.index', $data);
    }
    public function submit(ContactFormRequest $request): JsonResponse
    {
        try {
            $contact = Contact::create($request->validated());

            // Send email to admin
            Mail::to(config('mail.admin_address'))->send(new ContactAdminNotification($contact));

            // Send email to user
            Mail::to($contact->email)->send(new ContactUserNotification($contact));

            return response()->json([
                'success' => true,
                'message' => 'Thank you for contacting us! We will get back to you soon.',
                'data' => [
                    'id' => $contact->id,
                    'full_name' => $contact->full_name,
                    'email' => $contact->email
                ]
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to submit contact form. Please try again.',
                'error' => config('app.debug') ? $e->getMessage() : 'Internal server error'
            ], 500);
        }
    }

    public function show(Contact $contact)
    {
        $data['contact'] = $contact;

        return view('contacts.show', $data);
    }

    public function getServiceTypes(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => Contact::getServiceTypes()
        ]);
    }
}
