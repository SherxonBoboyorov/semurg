<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Useful extends Model
{
    use HasFactory;

    protected $table = 'usefuls';

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
                    public_path() . '/upload/useful/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/useful/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $useful): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $useful->image)) {
                File::delete(public_path() . $useful->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/useful/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/useful/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $useful->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/useful/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/useful/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
