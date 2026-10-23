<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maggica Salón | Belleza en Oruro</title>
  <meta name="description" content="Salón de belleza Maggica en Oruro: servicios, horarios de atención y ubicación.">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <header>
    <h1>Maggica Salón</h1>
    <nav>
      <ul>
        <li><a href="#nosotros">Nosotros</a></li>
        <li><a href="#servicios">Servicios</a></li>
        <li><a href="#horarios">Horarios</a></li>
        <li><a href="#escribenos">Escríbenos</a></li>
        <li><a href="#contacto">Contacto</a></li>
      </ul>
    </nav>
    <button id="btn-tema" type="button">Modo oscuro</button>
  </header>

  <main>
    <section id="nosotros">
      <h2>Belleza y cuidado personal en Oruro</h2>
      <p>Somos un salón de belleza en Oruro. Atendemos con cita previa para que tengas tu espacio asegurado y no esperes de más.</p>
    </section>

    <section id="servicios">
      <h2>Servicios</h2>
      <ul class="servicios">
        <li>Corte de cabello</li>
        <li>Tinte y coloración</li>
        <li>Peinados para eventos</li>
        <li>Manicure y pedicure</li>
        <li>Tratamientos capilares</li>
      </ul>
    </section>

    <section id="horarios">
      <h2>Horarios de atención</h2>
      <ul>
        <li>Lunes a viernes: 09:00 a 19:00</li>
        <li>Sábados: 09:00 a 17:00</li>
        <li>Domingos: cerrado</li>
      </ul>
    </section>

    <section id="escribenos">
      <h2>Escríbenos</h2>
      <form action="procesar.php" method="POST">
    <label for="nombre">Nombre</label><br>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="correo">Correo electrónico</label><br>
    <input type="email" id="correo" name="correo" required><br><br>

    <label for="mensaje">Mensaje</label><br>
    <textarea id="mensaje" name="mensaje" rows="5"></textarea><br><br>

    <button type="submit">Enviar</button>
  </form>
      <p id="aviso-form" class="oculto"></p>
    </section>
  </main>

  <footer id="contacto">
    <h2>Contacto</h2>
    <p>Dirección: Calle 6 de Octubre #1234, zona Central, Oruro, Bolivia</p>
    <p>WhatsApp: <a href="https://wa.me/59172496651" target="_blank" >Escríbenos por WhatsApp</a></p>
    <p>Atención con cita previa, de lunes a sábado.</p>
    <p>&copy; 2026 Maggica Salón</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>