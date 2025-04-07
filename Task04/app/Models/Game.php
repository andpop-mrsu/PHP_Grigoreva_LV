<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games'; 

    protected $fillable = [
        'player_name',
        'expression',
        'user_answer',
        'correct_answer',
        'is_correct',
        'played_at'
    ];

    public $timestamps = false; 
}
