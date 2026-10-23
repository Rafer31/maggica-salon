const botonTema = document.querySelector("#btn-tema");

botonTema.addEventListener("click", function () {
  document.body.classList.toggle("oscuro");

  if (document.body.classList.contains("oscuro")) {
    botonTema.textContent = "Modo claro";
  } else {
    botonTema.textContent = "Modo oscuro";
  }
});

const formulario = document.querySelector("#form-contacto");
const aviso = document.querySelector("#aviso-form");

function mostrarAviso(texto, tipo) {
  aviso.textContent = texto;
  aviso.classList.remove("oculto", "error", "exito");
  aviso.classList.add(tipo);
}

function validarFormulario(event) {
  event.preventDefault();

  const nombre = document.querySelector("#nombre").value.trim();
  const correo = document.querySelector("#correo").value.trim();
  const mensaje = document.querySelector("#mensaje").value.trim();

  if (nombre === "") {
    mostrarAviso("Escribe tu nombre para poder atenderte.", "error");
    return;
  }

  if (!correo.includes("@")) {
    mostrarAviso("Revisa tu correo: debe tener una @.", "error");
    return;
  }
 if (mensaje === "") {
    mostrarAviso("Escriba algún mensaje porfavor", "error");
    return;
  }
  mostrarAviso("Gracias, " + nombre + ". Recibimos tu mensaje y te responderemos pronto.", "exito");
}

formulario.addEventListener("submit", validarFormulario);