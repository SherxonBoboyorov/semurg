<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceCategory extends Model
{
    use HasFactory;

    protected $table = 'insurance_categories';

    protected $fillable = [
        'title_ru',
        'title_uz',
        'title_en',
    ];
}
