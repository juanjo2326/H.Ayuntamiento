const nombre = document.getElementById("nombre");
const horario_entrada = document.getElementById("horario_entrada");
const horario_salidaa = document.getElementById("horario_salida");
const requisitos = document.getElementById("requisitos");
const fecha_publi = document.getElementById("fecha_publi");
const vacantes = document.getElementById("vacantes");
const listInputs = document.querySelectorAll(".form-input");


form.addEventListener("submit", (e) => {
    e.preventDefault();

    if (nombre.value.length < 1 || nombre.value){ 
        mostrarMensajeError("nombre", "Nombre no valido");
    }
    if (horario_entrada.value.length < 1 || horario_entrada.value){ 
        let elemento = document.querySelector(".horario_entrada");
        elemento.lastElementChild.innerHTML = "horario no valido";
     }
     if (horario_salida.value.length < 1 || horario_salida.value){ 
        let elemento = document.querySelector(".horario_salida");
        elemento.lastElementChild.innerHTML = "horario no valido";
     }
     if (requisitos.value.length < 1 || requisitos.value){ 
        let elemento = document.querySelector(".requisitos");
        elemento.lastElementChild.innerHTML = "dato no valido";
     }
});

function mostrarMensajeError(classInput, mensaje){
    let elemento = document.querySelector(`.${classInput}`);
    elemento.lastElementChild.innerHTML = mensaje;
}