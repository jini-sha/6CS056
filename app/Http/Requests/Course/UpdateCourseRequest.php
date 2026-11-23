<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'duration' => 'required|string|max:255',
            'fee' => 'required|numeric|min:0',
            'difficulty' => 'required|string|max:255',
            'is_active' => 'boolean',
        ];
    }
}
