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
    

<form class="max-w-md mx-auto mt-10 space-y-4" action="{{route('crear')}}" method="POST">

    <!-- Nombre -->
    <div>
        <label class="block text-sm font-medium text-gray-700">
            Nombre
        </label>
        <input
            type="text"
            placeholder="Nombre del libro"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm
                   focus:border-blue-500 focus:ring-blue-500"
        >
    </div>

    <!-- Autor -->
    <div>
        <label class="block text-sm font-medium text-gray-700">
            Autor
        </label>
        <input
            type="text"
            placeholder="Nombre del autor"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm
                   focus:border-blue-500 focus:ring-blue-500"
        >
    </div>

    <!-- Botón -->
    <button
        type="submit"
        class="w-full bg-blue-600 text-white py-2 rounded-md
               hover:bg-blue-700 transition"
    >
        Guardar
    </button>

</form>

</body>

</html>
