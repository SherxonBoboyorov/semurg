<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollVotes extends Model
{
    use HasFactory;

    protected  $table = 'poll_votes';

    protected $fillable = [
        'answer_id',
        'user_id'
    ];
}
