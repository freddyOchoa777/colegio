const nombres = document.getElementById("myname")
const apellidos = document.getElementById("surname")
const documentoIdentidad = document.getElementById("myname")
const correo = document.getElementById("email")
const celular = document.getElementById("mobile")
const contrasenia = document.getElementById("password")
const Contrasenia2 = document.getElementById("repeatpassword")
const terminosYcondiciones = document.getElementById("termsAndConditions")
const form = document.getElementById("form");
const listInpust = document.querySelectorAll(".form-input")

form.addEventListener("submit", (e) => {  
    e.preventDefault();

     if (nombres.value.length < 1 || nombres.value.trim() == ""){
        mostrarMensajeError("myname", "Nombres no validos*")
     }

     if (apellidos.value.length < 1 || apellidos.value.trim() == ""){
        mostrarMensajeError("surname", "Apellidos no validos*")
     }

     if (documentoIdentidad.value.length < 1 || documentoIdentidad.value.trim() == ""){
        mostrarMensajeError("mobile", "Documento Identidad no valido*")
     }

     if (correo.value.length < 1 || correo.value.trim() == ""){
        mostrarMensajeError("email", "Correo no valido*")
     }

     if (celular.value.length < 1 || celular.value.trim() == ""){
        mostrarMensajeError("mobile", "Celular no valido*")
     }

     if (contrasenia.value.length < 1 || contrasenia.value.trim() == ""){
        mostrarMensajeError("password", "Contrasenia no valida*")
     }

     if (Contrasenia2.value.length < 1 || Contrasenia2.value.trim() == ""){
        mostrarMensajeError("repeatPassword", "Contrasenia no valida*")
     }

     if (form.value.length < 1 || nombres.value.trim() == ""){
        console.error("error");
     }

});

function mostrarMensajeError(claseInput, mensaje) {
    let elemento = document.querySelector(`.${claseInput}`);  
    elemento.lastElementChild.innerHTML = mensaje; 
}