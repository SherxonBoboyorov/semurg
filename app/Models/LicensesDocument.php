<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class LicensesDocument extends Model
{
    use HasFactory;

    protected $table = 'licenses_documents';

    protected $fillable = [
        'licensescategory_id',
        'image',
        'title_ru',
        'title_uz',
        'title_en',
        'size'
    ];


    public function licensescategory()
    {
        return $this->belongsTo(LicensesCategory::class,  'licensescategory_id', 'id');
    }

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/licensesdocument/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/licensesdocument/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $licensesdocument): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $licensesdocument->image)) {
                File::delete(public_path() . $licensesdocument->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/licensesdocument/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/licensesdocument/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $licensesdocument->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/licensesdocument/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/licensesdocument/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
