<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Poll extends Model
{
    use HasFactory;

    protected $table = 'polls';

    protected $fillable = [
        'question_ru',
        'question_uz',
        'question_en',
    ];

    public function answer(): HasMany
    {
        return $this->hasMany(PollAnswer::class, 'poll_id', 'id');
    }

    public function getAnswersAttribute(): Collection
    {
        return $this->answer()->get();
    }
                    
} 
