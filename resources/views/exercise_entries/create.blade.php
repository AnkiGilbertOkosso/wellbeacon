<x-app-layout>

<form method="POST" action="{{ route('exercise_entries.store') }}">
    @csrf
    <div class="form-group">
        <label for="exercise_type">Exercise Type</label>
        <input type="text" name="exercise_type" id="exercise_type" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="calorie_expenditure">Calorie Expenditure</label>
        <input type="number" name="calorie_expenditure" id="calorie_expenditure" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Exercise Entry</button>
</form>
</x-app-layout>
