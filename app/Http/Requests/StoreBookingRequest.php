<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
                'datetime',
            ],
            'timezone' => [
                'required',
                'string',
                'max:10'
            ],
        ];
    }
}
