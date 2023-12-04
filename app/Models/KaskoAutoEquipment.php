<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KaskoAutoEquipment extends Model
{
    use HasFactory;

    protected $table = 'kasko_auto_equipments';

    protected $fillable = [
        'model_id',
        'name_ru',
        'name_uz',
        'name_en',
        'price',
        'tariff'
    ];

    public function model(): BelongsTo
    {
        return $this->belongsTo(KaskoAutoModel::class, 'model_id', 'id');
    }
}
