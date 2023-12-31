<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

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
                    public_path() . '/upload/client/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/client/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $client): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $client->image)) {
                File::delete(public_path() . $client->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/client/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/client/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $client->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/client/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/client/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }


}
