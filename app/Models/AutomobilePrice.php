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


    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }

    public function automobilemodel()
    {
        return $this->belongsTo(AutomobileModel::class, 'automobilemodel_id');
    }

    public function equipment()
    {
        return $this->belongsTo(Equipment::class, 'equipment_id');
    }
}
