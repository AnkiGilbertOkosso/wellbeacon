<?php

namespace App\Http\Controllers;

use App\Models\ExerciseEntry;
use Illuminate\Http\Request;

class ExerciseEntryController extends Controller
{
    public function index()
    {
        $exerciseEntries = ExerciseEntry::orderBy('created_at', 'desc')->get();

        return view('exercise', ['exerciseEntries' => $exerciseEntries]);
    }
    public function create()
    {
        return view('exercise_entries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'exercise_type' => 'required|string',
            'calorie_expenditure' => 'required|integer',
        ]);

        ExerciseEntry::create([
            'user_id' => auth()->user()->id,
            'exercise_type' => $request->exercise_type,
            'calorie_expenditure' => $request->calorie_expenditure,
        ]);

        return redirect()->route('exercise_entries.create')->with('success', 'Exercise entry added successfully.');
    }
}
