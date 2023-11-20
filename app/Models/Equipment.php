<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipment';

    protected $fillable = [
        'car_id',
        'automobilemodel_id',
        'name'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }

    public function automobilemodel()
    {
        return $this->belongsTo(AutomobileModel::class, 'automobilemodel_id');
    }
}
