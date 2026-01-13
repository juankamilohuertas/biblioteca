const btnFormularioCrear = document.querySelector("#FormularioCrear");
const token = document.querySelector('input[name="_token"]').value;

/* ENVIANDO A LA BASE DE DATOS DESDE AJAX */

const creandoLibro = (e) => {
    const form = e.target;

    const formData = new FormData(form);

    const options = {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": token,
        },
        body: formData,
    };
    fetch("/libro/crear", options)
        .then((res) => res.json())
        .then((r) => {
            //eliminando los campos
            form.reset();
            console.log(r.mensaje);
        })
        .catch((e) => console.log("Llena todos los campos"));
};

btnFormularioCrear.addEventListener("submit", (e) => {
    e.preventDefault();
    creandoLibro(e);
});
