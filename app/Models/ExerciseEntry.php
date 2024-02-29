<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseEntry extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'exercise_type',
        'calorie_expenditure',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
