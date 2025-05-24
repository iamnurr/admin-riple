<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Http\JsonResponse;

class ContactController extends Controller
{
    public function submit(ContactFormRequest $request): JsonResponse
    {
        try {
            $contact = Contact::create($request->validated());

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

    public function getServiceTypes(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => Contact::getServiceTypes()
        ]);
    }
}
