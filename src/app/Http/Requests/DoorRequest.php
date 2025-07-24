<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'is_locked' => 'sometimes|boolean',
            'description' => 'nullable|string'
        ];
    }

    public function messages(): array
    {
        return [
            'location.required' => 'The location field is required.'
        ];
    }
}