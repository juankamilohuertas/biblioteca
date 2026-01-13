const botonEliminar = document.querySelectorAll("#eliminar");
const formulario__eliminar = document.querySelectorAll("#formulario__eliminar");
const contenedorEliminar = document.querySelector(".contenedorEliminar");

/* ASIGNANDO EL ID A LA RUTA PARA LA ELIMINACION DEL REGISTRO */
let validando = 0;
for (let registros = 0; registros < botonEliminar.length; registros++) {
    botonEliminar[registros].addEventListener("click", () => {
        const id = botonEliminar[registros].getAttribute("data-id");
        formulario__eliminar[0].action = `http://127.0.0.1:8000/libro/${id}`;

        contenedorEliminar.classList.remove("hidden");
        validando = 1;
    });
}

/* MOSTRANDO EL FORMULARIO DE ADVERTENCIA */

window.addEventListener("click", () => {
    validando++;
    if (validando > 2) {
        contenedorEliminar.classList.add("hidden");
    }
});
