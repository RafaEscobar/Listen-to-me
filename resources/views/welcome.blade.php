<x-auth-layout>
    <form action="{{route('user.login')}}" method="POST" id="formLogin">
        @csrf
        <div class="flex flex-col bg-white rounded-xl p-4 mb-6">
            <input
                name="email"
                type="email"
                placeholder="Correo electrónico"
                class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" />
            @error('email')
                <span class="text-red-600 mt-1">{{$message}}</span>
            @enderror
            <input
                name="password"
                type="password"
                placeholder="Contraseña"
                class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 mt-6" />
            @error('password')
                <span class="text-red-600 mt-1">{{$message}}</span>
            @enderror
        </div>
    </form>
</x-auth-layout>
