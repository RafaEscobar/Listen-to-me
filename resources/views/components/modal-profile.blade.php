@props(['user' => null])

<div>
    <div id="toggleDropdown" class="flex justify-end pr-4 pt-2">
        <x-far-user-circle class="w-10 text-[#0894ff]" />
    </div>
    <div id="dropdownMenu"class="hidden absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg p-4 border border-gray-200">
        <p class="text-sm text-gray-700">Hola {{$user->name}} 👋</p>
        <button class="mt-3 w-full px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">Mi perfil</button>
    </div>
</div>
