<?php 
namespace App\Services;

use App\Models\User as ModelsUser;
use App\User;

class CalorieCalculator
{
    public static function calculateNetCalories(User $user)
    {
        $totalCaloriesConsumed = $user->foodEntries()->sum('quantity' * 'calorie_value');
        $totalCaloriesBurned = $user->exerciseEntries()->sum('calorie_expenditure');

        return $totalCaloriesConsumed - $totalCaloriesBurned;
    }
}