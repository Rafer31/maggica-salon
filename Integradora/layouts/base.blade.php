<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasteleria La Espiga</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            padding: 1rem;
        }

        header {
            background: #1a2a4a;
            color: #fff;
            padding: 1rem;
            border-radius: 8px;
        }

        nav a {
            color: #ffd;
            margin-right: 1rem;
            text-decoration: none;
        }

        footer {
            margin-top: 2rem;
            color: #666;
            border-top: 1px solid #ddd;
            padding-top: .5rem;
        }
    </style>
</head>

<body>
    <header>
        <h1>Pasteleria La Espiga</h1>
        <nav>
            <a href="#">Inicio</a>
            <a href="#">Contacto</a>
            <a href="#">Productos</a>
            <a href="#">La ruta mínima</a>
        </nav>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>Integradora - Rafael Fernando Argote Zeballos - 27 de octubre de 2026</footer>
</body>

</html>
