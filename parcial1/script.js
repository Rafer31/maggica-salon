function mostrarMensaje() {
  const mensaje = document.querySelector("#mensaje");
  mensaje.textContent = "Encargo recibido - te atiende Rafael Fernando Argote Zeballos";
  mensaje.classList.remove("oculto");
}

const boton = document.querySelector("#btn-confirmar");
boton.addEventListener("click", mostrarMensaje);