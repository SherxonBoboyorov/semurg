<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Tender extends Model
{
    use HasFactory;

    protected $table = 'tenders';

    protected $fillable = [
        'image',
        'title_ru',
        'title_uz',
        'title_en',
        'slug_ru',
        'slug_uz',
        'slug_en',
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


    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/tender/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/tender/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $tender): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $tender->image)) {
                File::delete(public_path() . $tender->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/tender/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/tender/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $tender->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/tender/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/tender/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
