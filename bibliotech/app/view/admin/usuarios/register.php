<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="app/styleloginyregister.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section class="form-register">
        <form action="http://localhost/bibliotech/?C=registerController&M=insert" method="post" class="formulario-registro">
            <img src="https://cdn-icons-png.flaticon.com/512/309/309492.png" alt="Error de conexión" width="100">
            <h4>Regístrate para ver más</h4>
            <input class="controls" type="text" name="user" id="user" placeholder="Usuario" required>
            <input class="controls" type="password" name="pass" id="pass" placeholder="Contraseña" required>
            <input class="controls" type="text" name="name" id="name" placeholder="Nombre (s)" required>
            <input class="controls" type="text" name="app" id="app" placeholder="Apellidos (s)" required>
            <input class="controls" type="text" name="tel" id="tel" placeholder="Teléfono" required>
            <input class="controls" type="text" name="email" id="email" placeholder="Correo" required>
            <input class="controls" type="text" name="address" id="address" placeholder="Dirección" required>
            <p><input type="checkbox" required> Estoy de acuerdo con <a href="#">Términos y Condiciones</a></p>
            <p><input class="botones" type="submit" value="Enviar"></p>
        </form>
    </section>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="app/BIBLIOTECH.png" alt="Logo">
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="#">Términos y Condiciones</a></li>
                    <li><a href="#">Política de Privacidad</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>
