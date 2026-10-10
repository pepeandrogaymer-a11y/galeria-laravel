<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">

    <nav class="bg-gray-900 text-white shadow-md">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4">
            <a href="#" class="text-2xl font-bold">Galería</a>

            <ul class="hidden gap-6 md:flex">
                <li><a href="#" class="hover:text-gray-300">Inicio</a></li>
                <li><a href="#" class="hover:text-gray-300">Galería</a></li>
                <li><a href="#" class="hover:text-gray-300">Nosotros</a></li>
                <li><a href="#" class="hover:text-gray-300">Contacto</a></li>
            </ul>

            <button id="menu-btn" class="md:hidden" aria-label="Abrir menú">
                <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <ul id="menu-movil" class="hidden flex-col gap-3 px-4 pb-4 md:!hidden">
            <li><a href="#" class="block py-1">Inicio</a></li>
            <li><a href="#" class="block py-1">Galería</a></li>
            <li><a href="#" class="block py-1">Nosotros</a></li>
            <li><a href="#" class="block py-1">Contacto</a></li>
        </ul>
    </nav>

    <main class="mx-auto max-w-6xl px-4 py-8">
        <h1 class="mb-8 text-center text-3xl font-bold text-gray-900 md:text-4xl">
            Nuestra Galería
        </h1>

        @php
            $fotos = [
                ['img' => 'paisaje.jpg',  'titulo' => 'Paisaje Natural', 'texto' => 'Una hermosa vista de la naturaleza.'],
                ['img' => 'montanas.jpg', 'titulo' => 'Montañas',        'texto' => 'Paisajes increíbles rodeados de montañas.'],
                ['img' => 'bosque.jpg',   'titulo' => 'Bosque',          'texto' => 'Un tranquilo bosque rodeado de naturaleza.'],
                ['img' => 'playa.jpg',    'titulo' => 'Playa',           'texto' => 'Un lugar perfecto para descansar.'],
                ['img' => 'ciudad.jpg',   'titulo' => 'Ciudad',          'texto' => 'Arquitectura moderna en una gran ciudad.'],
                ['img' => 'aventura.jpg', 'titulo' => 'Aventura',        'texto' => 'Explora nuevos lugares y vive nuevas experiencias.'],
            ];
        @endphp

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
            @foreach ($fotos as $foto)
                <article class="overflow-hidden rounded-xl bg-white shadow-md transition hover:shadow-xl">
                    <img src="{{ asset('images/' . $foto['img']) }}"
                         alt="{{ $foto['titulo'] }}"
                         class="h-56 w-full object-cover">
                    <div class="p-5">
                        <h2 class="mb-2 text-xl font-bold text-gray-900">{{ $foto['titulo'] }}</h2>
                        <p class="text-gray-600">{{ $foto['texto'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </main>

    <script>
        document.getElementById('menu-btn').addEventListener('click', function () {
            document.getElementById('menu-movil').classList.toggle('hidden');
            document.getElementById('menu-movil').classList.toggle('flex');
        });
    </script>
</body>
</html>
