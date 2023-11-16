<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutomobileModel extends Model
{
    use HasFactory;

    protected $table = 'automobile_models';

    protected $fillable = [
        'car_id',
        'automobile_name'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}
