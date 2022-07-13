@props(['name'])

<x-form.field>

    <x-form.label name="{{ $name }}" />

        <textarea 
                class="mt-20 block w-full text-black-color bg-[#F5F0E8] rounded-sm p-15 placeholder:text-optional-color outline-0 placeholder:ease-in placeholder:duration-300 focus:placeholder:text-transparent text-13px md:text-15px lg:text-16px" 
                {{-- class="border border-gray-200 p-2 w-full rounded"  --}}
                
                placeholder="Zawartość postu"
                cols="30" 
                rows="5"
                name="{{ $name }}"
                id="{{ $name }}"
                required

        >{{ old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />

</x-form.field>