<x-app-layout>

   <!-- resources/views/components/food_entry_card.blade.php -->

<div class="p-6 relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 w-full shadow-lg rounded">
    <!-- Form for adding food entry -->
    <form method="POST" action="{{ route('food_entries.store') }}">
        @csrf
        <div class="mb-4">
            <label for="food_name" class="block text-sm font-medium text-gray-700">Food Name</label>
            <input type="text" name="food_name" id="food_name" class="form-input mt-1 block w-full rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-input mt-1 block w-full rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="calorie_value" class="block text-sm font-medium text-gray-700">Calorie Value</label>
            <input type="number" name="calorie_value" id="calorie_value" class="form-input mt-1 block w-full rounded-md" required>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Add Food Entry</button>
    </form>

    <!-- Table displaying food entry information -->
    <div class="mt-6">
        <h3 class="text-lg font-semibold mb-2">Food Entry History</h3>
        <table id="food_entry_table" class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">Food Name</th>
                    <th class="px-4 py-2">Quantity</th>
                    <th class="px-4 py-2">Calorie Value</th>
                    <th class="px-4 py-2">Time</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop through food entry data and display in table rows -->
                @foreach($foodEntries as $entry)
                <tr>
                    <td class="border px-4 py-2">{{ $entry->food_name }}</td>
                    <td class="border px-4 py-2">{{ $entry->quantity }}</td>
                    <td class="border px-4 py-2">{{ $entry->calorie_value }}</td>
                    <td class="border px-4 py-2">{{ $entry->created_at->format('Y-m-d H:i:s') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</x-app-layout>
