const btnFormularioCrear = document.querySelector("#FormularioCrear");
const tbody = document.querySelector("#tabla-libros");

function cargarTabla() {
    tbody.innerHTML = "";
    fetch("/libro/crear")
        .then((res) => res.json())
        .then((res) => {
            for (const libro of res.libros) {
                tbody.innerHTML += `
            <tr id="${libro.id}">
                <td>${libro.id}</td>
                <td>${libro.nombre}</td>
                <td>${libro.author}</td>
                <td class="border border-gray-300">
                <button id="actualizar" class="bg-orange-500 hover:bg-gray-500">ACTUALIZAR
                </button>
                </td>
                <td class="border border-gray-300">
                    <button id="eliminar" class="bg-red-500 hover:bg-gray-500">BORRAR</button>
                </td>
            </tr>
            `;
            }
        });
}

window.addEventListener("load", cargarTabla);
btnFormularioCrear.addEventListener("submit", cargarTabla);
