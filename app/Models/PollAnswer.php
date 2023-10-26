<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PollAnswer extends Model
{
    use HasFactory;

    protected $table = 'poll_answers';

    protected $fillable = [
        'poll_id',
        'answer_ru',
        'answer_uz',
        'answer_en',
    ];

    public function votes(): HasMany
    {
        return $this->hasMany(PollVotes::class, 'answer_id', 'id');
    }
}
