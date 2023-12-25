<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class History extends Model
{
    use HasFactory;

    protected $table = 'histories';

    protected $fillable = [
        'content_ru',
        'content_uz',
        'content_en',
        'image'
    ];

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/history/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/history/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $history): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $history->image)) {
                File::delete(public_path() . $history->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/history/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/history/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $history->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/history/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/history/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
