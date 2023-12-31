<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class International extends Model
{
    use HasFactory;

    protected $table = 'internationals';

    protected $fillable = [
        'image',
        'link'
    ];


    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/international/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/international/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $international): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $international->image)) {
                File::delete(public_path() . $international->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/international/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/international/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $international->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/international/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/international/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
