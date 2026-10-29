<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maggica Salón | Belleza en Oruro</title>
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
  <style>
    table { width: 100%; border-collapse: collapse; }
    th, td { text-align: left; padding: 8px; border-bottom: 1px solid #d9b8c2; }
    form select {
      width: 100%;
      margin-top: 6px;
      padding: 10px;
      border: 1px solid #d9b8c2;
      border-radius: 8px;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 16px;
    }
    .tabla-scroll { overflow-x: auto; }
  </style>
</head>
<body>

  <header>
    <h1>Maggica Salón</h1>
    <nav>
      <ul>
        <li><a href="/">Inicio</a></li>
        <li><a href="/citas/nueva">Pedir cita</a></li>
        <li><a href="/contacto">Contacto</a></li>
        @auth
          <li><a href="/panel">Panel</a></li>
        @else
          <li><a href="/login">Entrar</a></li>
        @endauth
      </ul>
    </nav>
  </header>

  <main>
    @yield('contenido')
  </main>

  <footer>
    <p>&copy; 2026 Maggica Salón</p>
  </footer>

</body>
</html>
