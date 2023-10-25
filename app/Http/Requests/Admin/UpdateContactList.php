<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactList extends FormRequest
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
            'title_ru' => 'required|string|max:255',
            'title_uz' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'address_ru' => 'required|string|max:255',
            'address_uz' => 'required|string|max:255',
            'address_en' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'work_days_ru' => 'required|string|max:255',
            'work_days_uz' => 'required|string|max:255',
            'work_days_en' => 'required|string|max:255',
            'opening_hours_ru' => 'required|string|max:255',
            'opening_hours_uz' => 'required|string|max:255',
            'opening_hours_en' => 'required|string|max:255',
        ];
    }
}
