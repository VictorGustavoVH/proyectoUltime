<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/combined.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>BiblioTech</title>
</head>
<body>
<header class="encabezado">
        <div class="logo">
            <img src="app/BIBLIOTECH.png" alt="Error al cargar la imagen">
        </div>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon"><i class="fas fa-bars"></i></label>
        <nav>
            <ul class="enlaces-nav">
                <li><a href="http://localhost/bibliotech">Inicio</a></li>
                <li><a href="http://localhost/bibliotech?C=bookController&M=CallIndex">Libros</a></li>
                <li><a href="http://localhost/bibliotech?C=accionesController&M=index">Movimientos</a></li>
                <li><a href="http://localhost/bibliotech?C=loginController&M=loged_out">Cerrar Sesion</a></li>
            </ul>            
        </nav>
    </header>
    <section class="container">
        <?php include_once($vista) ?>
    </section>
</body>
</html>