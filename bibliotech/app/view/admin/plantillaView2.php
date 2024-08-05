<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/styleloginyregister.css">
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
                <li><a href="http://localhost/bibliotech?C=registerController&M=CallInsert">Sign Up</a></li>
                <li><a href="http://localhost/bibliotech?C=loginController&M=CallLogin">Log in</a></li>
            </ul>
            </ul>            
        </nav>
    </header>
    <section class="container">
        <?php include_once($vista) ?>
    </section>
    
</body>
</html>