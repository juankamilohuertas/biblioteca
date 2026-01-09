<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>


    <form class="max-w-md mx-auto mt-10 space-y-4" action="{{ route('crear.libro') }}" method="POST">
        @csrf
        <!-- Nombre -->
        <div>
            <label class="block text-sm font-medium text-gray-700">
                Nombre
            </label>
            <input type="text" name="nombre" placeholder="Nombre del libro"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm
                   focus:border-blue-500 focus:ring-blue-500">
        </div>

        <!-- Autor -->
        <div>
            <label class="block text-sm font-medium text-gray-700">
                Autor
            </label>
            <input type="text" name="author" placeholder="Nombre del autor"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm
                   focus:border-blue-500 focus:ring-blue-500">
        </div>

        <!-- Botón -->
        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-md
               hover:bg-blue-700 transition">
            Guardar
        </button>

    </form>

    {{-- BOTENER TODOS LOS LIBROS --}}
    <table class="border-collapse border border-gray-400">
        <thead>
            <tr>
                <th class="border border-gray-300">NOMBRE LIBRO</th>
                <th class="border border-gray-300">AUTOR</th>
                <th class="border border-gray-300">0</th>
                <th class="border border-gray-300">0</th>
            </tr>
        </thead>
        <tbody>
            @if (isset($libros) && $libros->count())
                @foreach ($libros as $libro)
                    <tr>
                        <td class="border border-gray-300">{{ $libro->nombre }}</td>
                        <td class="border border-gray-300">{{ $libro->author }}</td>
                        <td class="border border-gray-300"><button id="actualizar"
                                class="bg-orange-500 hover:bg-gray-500" data-id="{{ $libro->id }}">ACTUALIZAR</button></td>
                        <td class="border border-gray-300"><button class="bg-red-500 hover:bg-gray-500">BORRAR</button>
                        </td>
                    </tr>
                @endforeach
            @else
                <td>No hay libros</td>
            @endif

        </tbody>

    </table>
    {{-- ACTUALIZAR --}}
    <form method="POST" action="{{ route('libro.actualizar', $libro->id) }}">
        @csrf
        @method('PUT')
        @foreach ($libros as $libro)
            <tr>
                <td class="border border-gray-300"><input name="nombre" value="{{$libro->nombre}}"></td>
                <td class="border border-gray-300"><input name="author" value="{{ $libro->author }}"></td>
            </tr>
        @endforeach
        
        
        <button>Actualizar</button>
    </form>


  <script>
    const actualizar = document.querySelectorAll("#actualizar");

    actualizar.forEach(boton => {
        boton.addEventListener('click', () => {
            const id = boton.dataset.id;
            window.location.href = `/libro/actualizar/${id}`;
        });
    });
</script>


</body>

</html>
