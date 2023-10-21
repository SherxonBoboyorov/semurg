<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
