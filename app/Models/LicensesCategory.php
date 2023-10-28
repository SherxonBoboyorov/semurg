<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicensesCategory extends Model
{
    use HasFactory;

    protected $table = 'licenses_categories';

    protected $fillable = [
        'title_ru',
        'title_uz',
        'title_en',
    ];

    public function licensesdocuments()
    {
        return $this->hasMany(LicensesDocument::class, 'licensescategory_id');
    }
}
