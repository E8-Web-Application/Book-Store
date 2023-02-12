<button {{ $attributes->merge(['type' => 'submit', 'class' => 'focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900']) }}>
    {{ $slot }}
</button>
