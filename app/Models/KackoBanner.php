<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class KackoBanner extends Model
{
    use HasFactory;

    protected $table = 'kacko_banners';

    protected $fillable = [
        'image',
        'title_ru',
        'title_uz',
        'title_en',
        'content_ru',
        'content_uz',
        'content_en',
    ];


    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/kackobanner/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/kackobanner/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $kackobanner): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $kackobanner->image)) {
                File::delete(public_path() . $kackobanner->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/kackobanner/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/kackobanner/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $kackobanner->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/kackobanner/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/kackobanner/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
