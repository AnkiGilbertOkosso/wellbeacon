<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md lg:col-span-2">
        <div class="flex justify-between mb-4 items-center">
            <div class="font-bold justify-center text-center">Todo List</div>
            <!-- Add Todo Button -->
            <button
                class="text-white bg-gradient-to-r from-purple-700 to-purple-800 hover:to-purple-900 font-semibold py-2 px-4 rounded">Add
                Todo</button>
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


    </div>
    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
        <div class="flex justify-between mb-4 items-start">
            <div class="font-bold">Latest Blog Posts</div>
            <a href="{{ route('post.index') }}" class="text-purple-500 hover:underline">All Post</a>

        </div>
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                @foreach (App\Models\Post::all() as $post)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="grid">
                            <!-- Blog Post Tile -->
                            <div class="bg-white overflow-x shadow-md rounded-lg">
                                <img src="https://via.placeholder.com/400x200" alt="Blog Post Image"
                                    class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <h3 class="text-xl font-semibold mb-2">{{ $post->title }}</h3>
                                    <p class="text-gray-700">{{ Str::limit($post->body, 150) }}</p>
                                    <a href="#" class="text-blue-500 hover:underline mt-2 inline-block">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
