<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body id="contenedor" class="h-screen bg-gray-400">
    <div class="flex items-center h-screen  justify-center">
        {{-- FROMULARIO CREAR LIBRO --}}
        <div class="pe-5">
            @include('crear_libro')
        </div>

        {{-- TABLA BOTENER TODOS LOS LIBROS --}}
        <div>
            @include('tabla_obtener_libro')
        </div>

        {{-- FORMULARIO ACTUALIZAR LIBRO --}}
        <div class="contenedorActualizar absolute bg-blue-100 rounded-lg shadow-xl p-5 w-100 hidden">
            @include('formulario_actualizar')
        </div>

        {{-- FORMULARIO ELIMINAR LIBRO --}}
        <div class="contenedorEliminar absolute m-auto bg-blue-100 rounded-lg shadow-xl p-5 w-100 hidden">
            <h1>Estas seguro que quieres eliminar el registro</h1>
            @include('formulario_eliminar')
        </div>
    </div>


</body>

</html>
