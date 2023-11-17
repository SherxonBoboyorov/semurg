<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutomobilePrice extends Model
{
    use HasFactory;

    protected $table = 'automobile_prices';

    protected $fillable = [
        'car_id',
        'automobilemodel_id',
        'equipment_id',
        'price'
    ];
}
