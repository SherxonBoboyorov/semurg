<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticle extends FormRequest
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
            'image' => 'nullable|image|mimes:png,jpg,jpeg,wepb',
            'title_ru' => 'required|string|max:255',
            'title_uz' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'content_ru' => 'required',
            'content_uz' => 'required',
            'content_en' => 'required',
        ];
    }
}
