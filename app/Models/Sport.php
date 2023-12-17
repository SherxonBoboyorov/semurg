<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;

    protected $table = 'sports';

    protected $fillable = [
        'name_ru',
        'name_uz',
        'name_en',
        'six_month',
        'twelve_month'
    ];
}
