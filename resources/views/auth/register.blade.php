<x-auth-layout :isLogin=false>
    <form id='formRegister' action="{{route('user.register')}}" method="POST">
        @csrf
        <div class="flex flex-col bg-white rounded-xl p-4 mb-6">
            <input
                name="name"
                type="text"
                placeholder="Nombre"
                class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" />
                @error('name')
                    <span class="text-red-600 mt-1">{{$message}}</span>
                @enderror
            <input
                name="last_name"
                type="text"
                placeholder="Apellidos"
                class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 mt-6" />
                @error('last_name')
                    <span class="text-red-600 mt-1">{{$message}}</span>
                @enderror
            <input
                name="email"
                type="email"
                placeholder="Correo electrónico"
                class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 mt-6" />
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
            <input
                name="confirmPass"
                type="password"
                placeholder="Confirmar contraseña"
                class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 mt-6" />
                @error('confirmPass')
                    <span class="text-red-600 mt-1">{{$message}}</span>
                @enderror
        </div>
    </form>
</x-auth-layout>
