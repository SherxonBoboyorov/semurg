<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Director extends Model
{
    use HasFactory;

    protected $table = 'directors';

    protected $fillable = [
        'image',
        'title_ru',
        'title_uz',
        'title_en',
        'job_ru',
        'job_uz',
        'job_en',
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
                    public_path() . '/upload/director/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/director/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $director): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $director->image)) {
                File::delete(public_path() . $director->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/director/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/director/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $director->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/director/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/director/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
