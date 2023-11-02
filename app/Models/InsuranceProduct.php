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
}

