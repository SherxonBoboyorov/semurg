<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSport extends FormRequest
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
            'name_ru' => 'required|max:255',
            'name_uz' => 'required|max:255',
            'name_en' => 'required|max:255',
            'six_month' => 'nullable|max:100',
            'twelve_month' => 'nullable|max:100',
        ];
    }
}
