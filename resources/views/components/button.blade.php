<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn bg-purple-500 hover:bg-indigo-600 text-white whitespace-nowrap']) }}>
    {{ $slot }}
</button>
