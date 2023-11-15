<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculationResult extends Model
{
    use HasFactory;

    protected $table = 'calculation_results';

    protected $fillable =
    [
        'car_id', 'key', 'value'
    ];
}
