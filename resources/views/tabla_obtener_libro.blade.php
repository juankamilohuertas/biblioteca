<table class="border-collapse border border-gray-400">
    <thead>
        <tr>
            <th class="border border-gray-300">id</th>
            <th class="border border-gray-300">NOMBRE LIBRO</th>
            <th class="border border-gray-300">AUTOR</th>
            <th class="border border-gray-300">0</th>
            <th class="border border-gray-300">0</th>
        </tr>
    </thead>
    <tbody>
        @if (isset($libros) && $libros->count())
            @foreach ($libros as $libro)
                <tr id="tabla__registros data_{{ $libro->id }}" class="{{ $libro->id }}">
                    <td class="border border-gray-300">{{ $libro->id }}</td>
                    <td class="border border-gray-300">{{ $libro->nombre }}</td>
                    <td class="border border-gray-300">{{ $libro->author }}</td>
                    <td class="border border-gray-300">
                        <button id="actualizar" class="bg-orange-500 hover:bg-gray-500"
                            data-id="{{ $libro->id }}">ACTUALIZAR
                        </button>
                    </td>
                    <td class="border border-gray-300">
                        <button id="eliminar" class="bg-red-500 hover:bg-gray-500"
                            data-id="{{ $libro->id }}">BORRAR</button>
                    </td>
                </tr>
            @endforeach
        @else
            <td>No hay libros</td>
        @endif

    </tbody>

</table>
