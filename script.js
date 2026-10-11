const boton = document.querySelector("#btn-tema");

boton.addEventListener("click", function () {
  document.body.classList.toggle("oscuro");

  if (document.body.classList.contains("oscuro")) {
    boton.textContent = "Modo claro";
  } else {
    boton.textContent = "Modo oscuro";
  }
});
