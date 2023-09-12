<div class="flex flex-col justify-center items-center">
    <input
        type="password"
        placeholder="{{ $placeholder }}"
        name="{{ $name }}"
        id="{{ $name }}"
        class="py-2 px-4 rounded-lg border-2 border-gray-200 focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all duration-300 ease-in-out @error($name)
            ring-2 ring-red-600
        @enderror"
    >

    @error($name)
        <div class="text-xs font-Poppins text-red-600 mt-1">{{ $message }}</div>
    @enderror
</div>
