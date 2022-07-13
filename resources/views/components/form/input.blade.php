@props(['name', 'type' => 'text'])

<x-form.field>

    <x-form.label name="{{ $name }}" />

    <input
        class="block w-full text-black-color bg-[#F5F0E8] h-50 lg:h-60 leading-[50px] lg:leading-[60px]
              rounded-sm pl-20 pr-20 placeholder:text-optional-color outline-0 
              placeholder:ease-in placeholder:duration-300 focus:placeholder:text-transparent 
              text-13px md:text-15px lg:text-16px m-12"
        {{-- class="border border-gray-300 p-4 w-full rounded" --}}

        placeholder="Tytuł posta" 
        type="{{ $type }}" 
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old( $name) }}"
        required
    />

    <x-form.error name="{{ $name }}" />

</x-form.field>