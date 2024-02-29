<div class="p-6 relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 w-full shadow-lg rounded">
    <!-- Form for adding exercise entry -->
    <form method="POST" action="{{ route('exercise_entries.store') }}">
        @csrf
        <div class="mb-4">
            <label for="exercise_type" class="block text-sm font-medium text-gray-700">Exercise Type</label>
            <input type="text" name="exercise_type" id="exercise_type" class="form-input mt-1 block w-full rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="calorie_expenditure" class="block text-sm font-medium text-gray-700">Calorie Expenditure</label>
            <input type="number" name="calorie_expenditure" id="calorie_expenditure" class="form-input mt-1 block w-full rounded-md" required>
        </div>
        <button type="submit" class="text-white bg-gradient-to-r from-purple-700 to-purple-800 hover:to-purple-900 font-semibold py-2 px-4 rounded">Add Exercise Entry</button>
    </form>

    <!-- Table displaying exercise entry information -->
    <div class="mt-6">
        <h3 class="text-lg font-semibold mb-2">Exercise Entry History</h3>
        <table id="exercise_entry_table" class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">Exercise Type</th>
                    <th class="px-4 py-2">Calorie Expenditure</th>
                    <th class="px-4 py-2">Time</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop through exercise entry data and display in table rows -->
                @foreach($exerciseEntries as $entry)
                <tr>
                    <td class="border px-4 py-2">{{ $entry->exercise_type }}</td>
                    <td class="border px-4 py-2">{{ $entry->calorie_expenditure }}</td>
                    <td class="border px-4 py-2">{{ $entry->created_at->format('M d, Y  H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>