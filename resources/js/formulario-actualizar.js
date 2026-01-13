const actualizar = document.querySelectorAll("#actualizar");
const contenedorActualizar = document.querySelector(".contenedorActualizar");
const contenedorPrincipal = document.querySelector("#contenedor");
const formularioActualizar__form = document.querySelector(
    "#formularioActualizar__form"
);
const entradasFormulario = document.querySelectorAll(
    "#formularioActualizar__form input"
);
const tabla__registros = document.querySelectorAll("#tabla__registros");

let botonActivo = 0;
actualizar.forEach((boton) => {
    boton.addEventListener("click", (e) => {
        const id = boton.getAttribute("data-id");
        formularioActualizar__form.action = `http://127.0.0.1:8000/libro/crear/${id}`;

        const nombre = boton.parentElement.parentElement.children[1].textContent;
        const author = boton.parentElement.parentElement.children[2].textContent;
           
        entradasFormulario[2].value = nombre;
        entradasFormulario[3].value = author;

        contenedorActualizar.classList.remove("hidden");
        contenedorPrincipal.classList.add("bg-gray-800");
        botonActivo = 0;
    });
});

contenedorActualizar.addEventListener("click", () => {
    botonActivo = 0;
});

window.addEventListener("click", () => {
    botonActivo++;
    if (botonActivo > 1) {
        contenedorActualizar.classList.add("hidden");
        contenedorPrincipal.classList.remove("bg-gray-800");
    }
});

/* ********************************* */
