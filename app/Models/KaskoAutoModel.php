<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KaskoAutoModel extends Model
{
    use HasFactory;

    protected $table = 'kasko_auto_models';

    protected $fillable = [
        'brand_id',
        'name_ru',
        'name_uz',
        'name_en'
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(KaskoAutoBrand::class, 'brand_id', 'id');
    }

    public function equipments(): HasMany
    {
        return $this->hasMany(KaskoAutoEquipment::class, 'model_id', 'id');
    }
}
