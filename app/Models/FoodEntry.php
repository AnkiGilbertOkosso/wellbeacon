<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodEntry extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'food_name',
        'quantity',
        'calorie_value',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
