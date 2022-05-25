@props(['name'])

<label class="block mb-2 uppercase font-bold text-us text-gray-700"
       for="{{ $name }}"
>
    {{ ucwords($name) }}
</label>