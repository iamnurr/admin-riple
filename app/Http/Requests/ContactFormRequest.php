<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ContactFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string', 'max:255'],
            'company_name' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'service_type' => ['required', 'string', 'max:255'],
            'project_budget' => ['nullable', 'numeric', 'min:0'],
            'project_details' => ['required', 'string', 'max:2000'],
        ];
    }

    public function messages(): array
    {
        return [
            'full_name.required' => 'Full name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Please enter a valid email address',
            'service_type.required' => 'Please select a service type',
            'project_details.required' => 'Project details are required',
            'project_budget.numeric' => 'Project budget must be a number',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Failed to submit contact form. Please try again.',
            'errors' => $validator->errors()
        ], 422));
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            // You can add custom validation logic here if needed
        });
    }
}
