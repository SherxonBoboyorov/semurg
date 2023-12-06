<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Ocago extends Model
{
    use HasFactory;

    protected $table = 'ocagos';

    protected $fillable = [
        'image',
        'title_ru',
        'title_uz',
        'title_en',
        'link'
    ];

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/ocago/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/ocago/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $ocago): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $ocago->image)) {
                File::delete(public_path() . $ocago->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/ocago/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/ocago/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $ocago->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/ocago/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/ocago/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
