<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'image',
        'title_ru',
        'title_uz',
        'title_en',
        'size'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/product/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/product/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $product): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $product->image)) {
                File::delete(public_path() . $product->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/product/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/product/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $product->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/product/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/product/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
