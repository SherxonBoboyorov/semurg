<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KaskoAutoBrand extends Model
{
    use HasFactory;

    protected $table = 'kasko_auto_brands';

    protected $fillable = [
        'name_ru',
        'name_uz',
        'name_en'
    ];

    public function models(): HasMany
    {
        return $this->hasMany(KaskoAutoModel::class, 'brand_id', 'id');
    }
}
