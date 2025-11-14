@props(['isLogin' => true])

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <title>Listen to me</title>
</head>

<body>
    <div class="h-screen p-26 bg-cyan-300">
        <div class="flex flex-col lg:flex-row gap-6 h-full bg-white rounded-xl">
            <div class="w-full lg:w-2/4 p-6">
                    <h1>Mensaje #1</h1>
                    <div class="flex gap-x-2 mb-4">
                        <a href="{{route('login')}}"><p>Iniciar sesión</p></a>
                        <p>|</p>
                        <a href="{{route('register')}}"><p>Registrarme</p></a>
                    </div>
                    {{ $slot }}
                    @if ($isLogin)
                        <div class="flex gap-x-2 w-full justify-between mb-8">
                            <p>Recuerdame</p>
                            <p>Olvide mi contraseña</p>
                        </div>
                    @endif
                    <div class="text-center">
                        <button type="submit" form="{{ $isLogin ? 'formLogin' : 'formRegister' }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">
                           {{ $isLogin ? 'Iniciar sesión' : 'Registrarme' }}
                        </button>
                    </div>
            </div>
            <div class="hidden lg:block lg:w-2/4">
                <div class="bg-gray-200 border border-dashed border-gray-300 rounded-lg h-64 md:h-auto flex items-center justify-center">
                    <span class="text-gray-500">#Aquí va nuestra imagen#</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
