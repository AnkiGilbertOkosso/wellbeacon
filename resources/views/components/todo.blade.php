<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md lg:col-span-2">
        <div class="flex justify-between mb-4 items-start">
            <div class="font-medium">Today's Todo List</div>
             <div class="dropdown">
                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i class="ri-more-fill"></i></button>
                <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                    <li>
                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                    </li>
                </ul>
            </div> 
        </div>
         <!-- Todo List -->
    <ul class="divide-y divide-gray-200">
        <!-- Todo Item -->
        <li class="py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <!-- Todo Checkbox -->
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500">
                    <!-- Todo Text -->
                    <span class="ml-3 text-lg text-gray-800">Finish report for meeting</span>
                </div>
                <!-- Todo Delete Button -->
                <button class="text-red-500 hover:text-red-700 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </li>
        <!-- Add more todo items as needed -->
    </ul>

    <!-- Add Todo Button -->
    <div class="mt-6">
        <button class="text-white bg-gradient-to-r from-purple-700 to-purple-800 hover:to-purple-900 font-semibold py-2 px-4 rounded">Add Todo</button>
    </div>
    </div>
    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
        <div class="flex justify-between mb-4 items-start">
            <div class="font-medium">Latest Blog Posts</div>
            <a href="#" class="text-purple-500 hover:underline">All Post</a>

        </div>
        <div class="grid">
            <!-- Blog Post Tile -->
            <div class="bg-white overflow-x shadow-md rounded-lg">
                <img src="https://via.placeholder.com/400x200" alt="Blog Post Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Blog Post Title</h3>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra, nulla ut fermentum convallis.</p>
                    <a href="#" class="text-blue-500 hover:underline mt-2 inline-block">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>