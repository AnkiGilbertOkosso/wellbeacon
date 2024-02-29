<?php

namespace App\Http\Controllers;

use App\Models\FoodEntry;
use Illuminate\Http\Request;

class FoodEntryController extends Controller
{
    public function index()
    {
        $foodEntries = FoodEntry::orderBy('created_at', 'desc')->get();

        return view('food', ['foodEntries' => $foodEntries]);
    }
    public function create()
    {
        return view('food_entries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'food_name' => 'required|string',
            'quantity' => 'required|integer',
            'calorie_value' => 'required|integer',
        ]);

        FoodEntry::create([
            'user_id' => auth()->user()->id,
            'food_name' => $request->food_name,
            'quantity' => $request->quantity,
            'calorie_value' => $request->calorie_value,
        ]);

        return redirect()->route('food_entries.create')->with('success', 'Food entry added successfully.');
    }
}
