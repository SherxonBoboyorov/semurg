<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateInsuranceProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'insurancecategory_id' => 'required',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,wepb,svg',
            'icon' => 'nullable|image|mimes:png,jpg,jpeg,wepb',
            'attribute' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_uz' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'content_ru' => 'required',
            'content_uz' => 'required',
            'content_en' => 'required',
            'order' =>  'nullable|numeric',
            'banner_text_ru' => 'required|string|max:255',
            'banner_text_uz' => 'required|string|max:255',
            'banner_text_en' => 'required|string|max:255',
            'banner_content_ru' => 'required',
            'banner_content_uz' => 'required',
            'banner_content_en' => 'required',
            'content_right_ru' => 'required',
            'content_right_uz' => 'required',
            'content_right_en' => 'required',


        ];
    }
}
