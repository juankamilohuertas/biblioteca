<form id="formularioActualizar__form" class="max-w-md mt-10 space-y-4" method="POST" action="">
    @csrf
    @method('PUT')
    <div>
        <input
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm
                   focus:border-blue-500 focus:ring-blue-500"
            name="nombre" value="">
    </div>
    <div>
        <input
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm
                   focus:border-blue-500 focus:ring-blue-500"
            name="author" value="">
    </div>

    <button
        class="w-full bg-blue-600 text-white py-2 rounded-md
               hover:bg-blue-700 transition">Guardar</button>
</form>
