@props(['name'])

<label 
    {{-- class="block mb-2 uppercase font-bold text-xs text-gray-700" --}}
    class="text-black-color font-semibold text-13px md:text-15px lg:text-16px block mb-15"
    for="{{ $name }}"
    >

    {{ ucwords($name) }}

</label>