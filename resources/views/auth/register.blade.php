<x-auth-layout :isLogin=false>
    <div class="flex flex-col gap-8 bg-white rounded-xl p-4 mb-6">
        <input
            type="text"
            placeholder="Nombre"
            class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" />
        <input
            type="text"
            placeholder="Apellidos"
            class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" />
        <input
            type="email"
            placeholder="Correo electrónico"
            class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" />
        <input
            type="text"
            placeholder="Contraseña"
            class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" />
        <input
            type="text"
            placeholder="Confirmar contraseña"
            class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>
</x-auth-layout>
