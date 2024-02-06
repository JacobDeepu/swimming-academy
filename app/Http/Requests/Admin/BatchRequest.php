<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BatchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'level' => ['required', 'string', 'max:255'],
            'capacity_min' => ['required', 'numeric'],
            'capacity_max' => ['required', 'numeric'],
            'schedule_id' => ['required'],
            'instructor_id' => ['required'],
            'pool_id' => ['required'],
            'status' => ['required'],
        ];
    }
}
