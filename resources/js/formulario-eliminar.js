const eliminar = document.querySelectorAll("#eliminar");
const formulario__eliminar = document.querySelectorAll("#formulario__eliminar");
for (let regiatros = 0; regiatros < eliminar.length; regiatros++) {
    eliminar[regiatros].addEventListener("click", () => {
        const id = eliminar[regiatros].getAttribute("data-id");
        formulario__eliminar[0].action = `http://127.0.0.1:8000/libro/${id}`;
    });
}
