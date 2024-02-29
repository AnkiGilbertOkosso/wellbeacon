<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\User;
use App\Services\CalorieCalculator;

class CalorieController extends Controller
{
    public function setGoal(Request $request)
    {
        $request->validate([
            'calorie_goal' => 'required|integer|min:0',
        ]);

        $user = Auth::user();

        $user->calorie_goal = $request->calorie_goal;
        $user->save();

        return redirect()->back()->with('success', 'Calorie goal set successfully!');
    }

    

    public function showNetCalories(Request $request)
    {
        $user = $request->user(); // Assuming you're using authentication

        $netCalories = CalorieCalculator::calculateNetCalories($user);

        return redirect()->back()->compact( "netCalories");
    }
}

