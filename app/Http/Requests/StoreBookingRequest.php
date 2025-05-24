<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


class StoreBookingRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255'
            ],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
            ],
            'guest_email' => [
                'array',
            ],
            'guest_email.*' => [
                'email',
                'max:255',
            ],
            'message' => [
                'required',
                'string',
                'max:5000',
            ],
            'date' => [
                'required',
                // 'datetime',
            ],
            'timezone' => [
                'required',
                'string',
                'max:100'
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Please enter a valid email address',
            'guest_email.*.email' => 'Please enter a valid email address',
            'message.required' => 'Message is required',
            'date.required' => 'Date is required',
            'timezone.required' => 'Timezone is required',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Failed to book. Please try again.',
            'errors' => $validator->errors()
        ], 422));
    }
}
