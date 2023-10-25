<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactList extends Model
{
    use HasFactory;

    protected $table = 'contact_lists';

    protected $fillable = [
        'title_ru',
        'title_uz',
        'title_en',
        'address_ru',
        'address_uz',
        'address_en',
        'phone',
        'work_days_ru',
        'work_days_uz',
        'work_days_en',
        'opening_hours_ru',
        'opening_hours_uz',
        'opening_hours_en',
    ];
}
