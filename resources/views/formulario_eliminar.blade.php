<form id="formulario__eliminar" method="POST" action="">
    @csrf
    @method('DELETE')
    <div class="flex">
        <button
            class="w-full bg-blue-600 text-white py-2 rounded-md
               hover:bg-blue-700 transition">si</button>
    </div>

</form>
