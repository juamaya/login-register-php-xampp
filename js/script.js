document
  .getElementById("btn__iniciar-seccion")
  .addEventListener("click", iniciarSeccion);
document.getElementById("btn__registrarse").addEventListener("click", register);
window.addEventListener("resize", anchoPagina);

// Declaracion de varriables

let contenedor__login_register = document.querySelector(
  ".contenedor__login-register"
);
let formulario__login = document.querySelector(".formulario__login");
let formulario__register = document.querySelector(".formulario__register");
let caja__trasera_login = document.querySelector(".caja__trasera-login");
let caja__trasera_register = document.querySelector(".caja__trasera-register");

function anchoPagina() {
  if (window.innerWidth > 850) {
    caja__trasera_login.style.display = "block";
    caja__trasera_register.style.display = "block";
  } else {
    caja__trasera_register.style.display = "block";
    caja__trasera_register.style.opacity = "1";
    caja__trasera_login.style.display = "none";
    formulario__login.style.display = "block";
    formulario__register.style.display = "none";
    contenedor__login_register.style.left = "0px";
  }
}

anchoPagina();

function iniciarSeccion() {
  if (window.innerWidth > 850) {
    formulario__register.style.display = "none";
    contenedor__login_register.style.left = "10px";
    formulario__login.style.display = "block";
    caja__trasera_register.style.opacity = "1";
    caja__trasera_login.style.opacity = "0";
  } else {
    formulario__register.style.display = "none";
    contenedor__login_register.style.left = "0px";
    formulario__login.style.display = "block";
    caja__trasera_register.style.display = "block";
    caja__trasera_login.style.display = "none";
  }
}

function register() {
  if (window.innerWidth > 850) {
    formulario__register.style.display = "block";
    contenedor__login_register.style.left = "410px";
    formulario__login.style.display = "none";
    caja__trasera_register.style.opacity = "0";
    caja__trasera_login.style.opacity = "1";
  } else {
    formulario__register.style.display = "block";
    contenedor__login_register.style.left = "0px";
    formulario__login.style.display = "none";
    caja__trasera_register.style.display = "none";
    caja__trasera_login.style.display = "block";
    caja__trasera_login.style.opacity = "1";
  }
}
