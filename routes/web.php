<?php

use App\Http\Controllers\CalorieController;
use App\Http\Controllers\ExerciseEntryController;
use App\Http\Controllers\FoodEntryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/food_entries/create', [FoodEntryController::class, 'create'])->name('food_entries.create');
    Route::get('/food_entries/create', [FoodEntryController::class, 'index'])->name('food_entries.create');
    Route::post('/food_entries', [FoodEntryController::class, 'store'])->name('food_entries.store');
    Route::get('/exercise_entries/create', [ExerciseEntryController::class, 'create'])->name('exercise_entries.create');
    Route::get('/exercise_entries/create', [ExerciseEntryController::class, 'index'])->name('exercise_entries.create');
    Route::post('/exercise_entries', [ExerciseEntryController::class, 'store'])->name('exercise_entries.store');
    Route::get('/food', [FoodEntryController::class, 'index'])->name('food');
    Route::get('/exercise', [ExerciseEntryController::class, 'index'])->name('exercise');
    Route::post('/calorie/goal', [CalorieController::class, 'setGoal'])->name('calorie.goal');
});
require __DIR__.'/auth.php';
