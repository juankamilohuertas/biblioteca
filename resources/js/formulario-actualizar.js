const actualizar = document.querySelectorAll("#actualizar");
const formularioActualizar = document.querySelector(".formularioActualizar");
const formCrearLibro = document.querySelector("#contenedorCrearLibro");
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

        formularioActualizar.classList.remove("hidden");
        formCrearLibro.classList.add("bg-gray-800");
        botonActivo = 0;
    });
});

formularioActualizar.addEventListener("click", () => {
    formularioActualizar.classList.remove("hidden");
    botonActivo = 0;
});

window.addEventListener("click", () => {
    botonActivo++;
    if (botonActivo > 1) {
        formularioActualizar.classList.add("hidden");
        formCrearLibro.classList.remove("bg-gray-800");
    }
});

/* ********************************* */
