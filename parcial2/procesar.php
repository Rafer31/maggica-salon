<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$pedido = $_POST["pedido"];

$carta = [
  "Saltena de pollo - Bs 6",
  "Docena de saltenas - Bs 65",
  "Refresco de mocochinchi - Bs 5"
];

echo "<h1>Pedido recibido en Salteneria El Horno</h1>";
echo "<p>Nombre: " . ($nombre) . "</p>";
echo "<p>Correo: " . ($correo) . "</p>";
echo "<p>Pedido: " . ($pedido) . "</p>";

echo "<h2>Nuestra carta</h2>";
echo "<ul>";
foreach ($carta as $item) {
  echo "<li>" . $item . "</li>";
}
echo "</ul>";

echo "<p>Te atiende Rafael Fernando Argote Zeballos</p>";
?>