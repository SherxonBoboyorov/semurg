<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLeadership extends FormRequest
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
            'name_ru' => 'required|string|max:255',
            'name_uz' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'job_ru' => 'required|string|max:255',
            'job_uz' => 'required|string|max:255',
            'job_en' => 'required|string|max:255',
            'content_ru' => 'required',
            'content_uz' => 'required',
            'content_en' => 'required',
        ];
    }
}
