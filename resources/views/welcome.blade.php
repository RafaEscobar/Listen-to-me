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
    <div class="mx-auto">
        <!-- Contenedor principal: en pantallas pequeñas es una sola columna, en md+ es fila -->
        <div class="flex flex-col md:flex-row md:items-start gap-6">
            <!-- Columna izquierda: placeholder. Se oculta en pantallas pequeñas (hidden) -->
            <aside class="hidden md:block md:w-1/3">
                <div class="bg-gray-200 border border-dashed border-gray-300 rounded-lg h-64 md:h-auto flex items-center justify-center">
                    <span class="text-gray-500">Placeholder</span>
                </div>
            </aside>
            <!-- Columna derecha: contenido. Ocupa todo el ancho en móviles, y 2/3 en md+ -->
            <main class="w-full md:w-2/3 text-center bg-amber-400">
                <article class="prose prose-lg">
                    <h1>Lorem ipsum dolor sit amet</h1>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed
                        cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis
                        ipsum. </p>
                    <p> Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu
                        eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                        himenaeos. </p>
                    <p> Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque
                        nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem.
                    </p>
                </article>
            </main>
        </div>
    </div>
</body>

</html>
