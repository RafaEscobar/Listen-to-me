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
        <div class="flex flex-col md:flex-row gap-6 h-full bg-white rounded-xl">
            <div class="w-full md:w-2/4 p-6">
                <h1>Mensaje #1</h1>
                <div class="flex gap-x-2 mb-4">
                    <p>Iniciar sesión</p>
                    <p>|</p>
                    <p>Registrarme</p>
                </div>
                <div class="flex flex-col gap-8 bg-white rounded-xl p-4 mb-6">
                    <input
                    type="text"
                    placeholder="Correo electrónico"
                    class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                    />
                    <input
                    type="text"
                    placeholder="Contraseña"
                    class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                    />
                </div>
                <div class="flex gap-x-2 w-full justify-between mb-8">
                    <p>Recuerdame</p>
                    <p>Olvide mi contraseña</p>
                </div>
                <div class="text-center">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">
                        Iniciar sesión
                    </button>
                </div>
            </div>
            <div class="hidden md:block md:w-2/4">
                <div class="bg-gray-200 border border-dashed border-gray-300 rounded-lg h-64 md:h-auto flex items-center justify-center">
                    <span class="text-gray-500">#Aquí va nuestra imagen#</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
