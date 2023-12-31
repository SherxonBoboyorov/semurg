<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class InsuranceProduct extends Model
{
    use HasFactory;

    protected $table = 'insurance_products';

    protected $fillable = [
        'insurancecategory_id',
        'image',
        'icon',
        'attribute',
        'title_ru',
        'title_uz',
        'title_en',
        'content_ru',
        'content_uz',
        'content_en',
        'meta_title_ru',
        'meta_title_uz',
        'meta_title_en',
        'meta_description_ru',
        'meta_description_uz',
        'meta_description_en',
        'order',
        'banner_text_ru',
        'banner_text_uz',
        'banner_text_en',
        'banner_content_ru',
        'banner_content_uz',
        'banner_content_en',
        'content_right_ru',
        'content_right_uz',
        'content_right_en',
        'title_left_ru',
        'title_left_uz',
        'title_left_en',
        'title_right_ru',
        'title_right_uz',
        'title_right_en',
    ];

    public function insurancecategory()
    {
        return $this->belongsTo(InsuranceCategory::class, 'insurancecategory_id');
    }


    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/insuranceproduct/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/insuranceproduct/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $insuranceproduct): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $insuranceproduct->image)) {
                File::delete(public_path() . $insuranceproduct->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/insuranceproduct/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/insuranceproduct/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $insuranceproduct->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/insuranceproduct/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/insuranceproduct/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }


    public static function uploadIcon($request): ?string
    {
        if ($request->hasFile('icon')) {

            self::checkDirectory();

            $request->file('icon')
                ->move(
                    public_path() . '/upload/insuranceproducticon/' . date('d-m-Y'),
                    $request->file('icon')->getClientOriginalName()
                );
            return '/upload/insuranceproducticon/' . date('d-m-Y') . '/' . $request->file('icon')->getClientOriginalName();
        }

        return null;
    }

    public static function updateIcon($request, $insuranceproducticon): string
    {
        if ($request->hasFile('icon')) {
            if (File::exists(public_path() . $insuranceproducticon->icon)) {
                File::delete(public_path() . $insuranceproducticon->icon);
            }

            self::checkDirectory();

            $request->file('icon')
                ->move(
                    public_path() . '/upload/insuranceproducticon/' . date('d-m-Y'),
                    $request->file('icon')->getClientOriginalName()
                );
            return '/upload/insuranceproducticon/' . date('d-m-Y') . '/' . $request->file('icon')->getClientOriginalName();
        }

        return $insuranceproducticon->icon;
    }

    private static function checkDirectoryIcon(): bool
    {
        if (!File::exists(public_path() . '/upload/insuranceproducticon/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/insuranceproducticon/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}

