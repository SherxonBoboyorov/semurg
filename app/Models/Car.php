<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $fillable = [
        'type'
    ];

    public function automobilemodels()
    {
        return $this->hasMany(AutomobileModel::class, 'car_id');
    }

    public function equipment()
    {
        return $this->hasMany(Equipment::class, 'car_id');
    }

}
