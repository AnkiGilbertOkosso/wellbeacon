    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <div
            class="p-6 relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 w-full shadow-lg rounded">
            <div class="rounded-t mb-0 px-0 border-0">
                <h2 class="text-xl font-semibold mb-4">Calorie Goals</h2>

                <!-- Display user's calorie goal per date -->
                <form action="{{ route('calorie.goal') }}" method="POST" class="flex max-w-xs mx-auto  justify-start">
                    @csrf
                    <div class="mb-4">
                        <label for="calorie_goal" class="block text-sm font-medium text-gray-700">Set Calorie Goal</label>
                        <div class="flex">
                            <input type="number" id="calorie_goal" name="calorie_goal" class="form-input flex-grow rounded-l-md" placeholder="Enter calorie goal">
                            <button type="submit" class="text-white bg-gradient-to-r from-purple-700 to-purple-800 hover:to-purple-900 font-bold py-2 px-4 rounded-r-md">Set</button>
                        </div>
                    </div>
                </form>
                
                                

                <!-- Display net calorie calculation -->
                <div class="mb-4">
                    <h1 class="text-5xl text-purple-800">{{ Auth::user()->calorie_goal }}</h1>
                </div>

                <!-- Buttons to add food and exercises -->
                <div class="flex space-x-4">
                    <a href="{{ route('food') }}" class="text-white bg-gradient-to-r from-purple-700 to-purple-800 hover:to-purple-900 font-semibold py-2 px-4 rounded">
                        Add Food
                    </a>
                    <a href="{{ route('exercise') }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">
                        Add Exercise
                    </a>
                </div>

                <!-- Display day streaks -->
                <div class="mt-4">
                    <p class="text-sm text-gray-500">Day streaks: X days</p>
                </div>
                
            </div>
        </div>
        <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold">Medication Tracker</h2>
                <button class="text-white bg-gradient-to-r from-purple-700 to-purple-800 hover:to-purple-900 font-semibold py-2 px-4 rounded">
                    Add Medication
                </button>
            </div>
        
            <!-- Display medication intake -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Medication Intake</label>
                <p class="mt-1">You have taken X out of Y medications today.</p>
            </div>
        
            <!-- Button to log medication intake -->
            <div class="mb-4">
                <button class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">
                    Log Medication Intake
                </button>
            </div>
        
            <!-- Display medication schedule -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Medication Schedule</label>
                <ul class="mt-1 list-disc list-inside">
                    <li>Medication 1: Time</li>
                    <li>Medication 2: Time</li>
                    <!-- Add more medications and their scheduled times as needed -->
                </ul>
            </div>
        
            <!-- Reminder for upcoming medications -->
            <div class="mb-4">
                <p class="text-sm text-gray-500">Next medication due in X minutes/hours.</p>
            </div>
        
            <!-- Option to view medication history -->
            <div>
                <a href="#" class="text-purple-500 hover:underline">View Medication History</a>
            </div>
        </div>
    </div>
