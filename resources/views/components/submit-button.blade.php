<button {{ $attributes->merge(['type' => 'submit', 'class' => 'mt-6 w-full focus:outline-none peer-focus:outline-none focus:outline-[#E9855A] text-lg font-black text-white bg-[#E9855A] focus:text-[#E9855A] rounded-lg py-2']) }}>
    {{ $slot }}
</button>
