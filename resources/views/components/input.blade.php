<div class="relative">
        <input class="w-full rounded-r-full tw-rounded-l-full placeholder-[#E9855A] text-[#E9855A] border-gray-300
                dark:border-[#E9855A]
                focus:border-indigo-500 dark:focus:border-indigo-600
                focus:ring-indigo-500 dark:focus:ring-indigo-600
                rounded-md shadow-sm py-3 px-12 bg-transparent flex justify-between items-center"
               type="{{ $type ?? 'text' }}"
               name="{{ $name ?? '' }}"
               value="{{ $value ?? '' }}"
               id="{{ $name ?? '' }}"
               @if(isset($required))
                   required
               @endif
               {!! $attributes ?? '' !!}
               placeholder="{{ $text ?? '' }}">
        <i class="{{ $icon }} text-xl flex items-center absolute right-0 py-2 px-4 top-0 bottom-0 text-[#E9855A] "></i>
</div>
