 <form class="max-w-md mx-auto space-y-4" action="{{ route('crear.libro') }}" method="POST">
     @csrf
     <!-- Nombre -->
     <div>
         <label class="block text-sm font-medium">
             Nombre del libro 
         </label>
         <input type="text" name="nombre" placeholder="Nombre del libro"
             class="mt-1 block w-full rounded-md border-gray-300 shadow-sm
                   focus:border-blue-500 focus:ring-blue-500">
     </div>

     <!-- Autor -->
     <div>
         <label class="block text-sm font-medium">
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
