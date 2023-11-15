<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $fillable = [
        'type'
    ];

    public function characters(): HasMany
    {
        return $this->hasMany(CalculationResult::class, 'car_id', 'id');
    }
}
