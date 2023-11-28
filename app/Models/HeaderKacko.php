<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class HeaderKacko extends Model
{
    use HasFactory;

    protected $table = 'header_kackos';

    protected $fillable = [
        'image',
        'icon',
        'title_ru',
        'title_uz',
        'title_en',
        'attribute',
        'link'
    ];



    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/headerkacko/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/headerkacko/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $headerkacko): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $headerkacko->image)) {
                File::delete(public_path() . $headerkacko->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/headerkacko/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/headerkacko/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $headerkacko->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/headerkacko/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/headerkacko/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }


    public static function uploadIcon($request): ?string
    {
        if ($request->hasFile('icon')) {

            self::checkDirectory();

            $request->file('icon')
                ->move(
                    public_path() . '/upload/headerkackoicon/' . date('d-m-Y'),
                    $request->file('icon')->getClientOriginalName()
                );
            return '/upload/headerkackoicon/' . date('d-m-Y') . '/' . $request->file('icon')->getClientOriginalName();
        }

        return null;
    }

    public static function updateIcon($request, $headerkackoicon): string
    {
        if ($request->hasFile('icon')) {
            if (File::exists(public_path() . $headerkackoicon->icon)) {
                File::delete(public_path() . $headerkackoicon->icon);
            }

            self::checkDirectory();

            $request->file('icon')
                ->move(
                    public_path() . '/upload/headerkackoicon/' . date('d-m-Y'),
                    $request->file('icon')->getClientOriginalName()
                );
            return '/upload/headerkackoicon/' . date('d-m-Y') . '/' . $request->file('icon')->getClientOriginalName();
        }

        return $headerkackoicon->icon;
    }

    private static function checkDirectoryIcon(): bool
    {
        if (!File::exists(public_path() . '/upload/headerkackoicon/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/headerkackoicon/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
