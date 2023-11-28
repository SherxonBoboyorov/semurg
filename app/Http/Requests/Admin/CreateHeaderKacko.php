<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateHeaderKacko extends FormRequest
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
            'image' => 'required|image|mimes:png,jpg,jpeg,wepb,svg',
            'icon' => 'required|image|mimes:png,jpg,jpeg,wepb',
            'attribute' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_uz' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'link' => 'nullable|string|max:255'
        ];
    }
}
