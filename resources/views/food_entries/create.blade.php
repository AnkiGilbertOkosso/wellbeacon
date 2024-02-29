<x-app-layout>

    <form method="POST" action="{{ route('food_entries.store') }}">
        @csrf
        <div class="form-group">
            <label for="food_name">Food Name</label>
            <input type="text" name="food_name" id="food_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="calorie_value">Calorie Value</label>
            <input type="number" name="calorie_value" id="calorie_value" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Food Entry</button>
    </form>
</x-app-layout>
