@props(['name'])

<div>

    @error($name)

        <p class="text-red-500 text-xc mt-2">  {{$message}}  </p>

    @enderror

</div>