<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Conexión de PHP con PostgreSQL usando PDO">
    <meta name="author" content="Jordi de la Cruz">
    <title>PostgreSQL-PHP | Por Jordi de la Cruz</title>
    <!-- Cargar el CSS de Bootstrap -->
    <link href="./bootstrap.min.css" rel="stylesheet">
    <!-- Cargar estilos propios -->
    <link href="style.css" rel="stylesheet">
    <style>
        /* Estilos adicionales */
        body {
            padding-top: 70px;
        }

        .navbar {
            border-bottom: 2px solid #ccc;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .navbar-toggler-icon {
            background-color: #333;
        }

        .navbar-nav .nav-link {
            color: #333;
        }

        .navbar-nav .nav-link:hover {
            color: #555;
        }

        main.container {
            padding: 40px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Definición del menú -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" target="_blank" href="https://tecsup.instructure.com/courses/25788">
            PostgreSQL-PHP | Por Jordi de la Cruz
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#miNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="miNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./listar.php">Listar (arreglo)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./listarCursor.php">Listar (cursor)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./formulario.php">Agregar</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Termina la definición del menú -->
    <main role="main" class="container">
        <!-- Contenido de la página -->
        <h1>Listado de Datos</h1>
        <p>Bienvenido al listado de datos por Jordi de la Cruz.</p>
        <!-- Aquí puedes agregar más contenido -->
    </main>
