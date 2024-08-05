<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="app/styleloginyregister.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    
    <section class="form-login">
        <form action="http://localhost/Bibliotech/?C=loginController&M=login" method="post" class="formulario-registro">
            <img src="https://cdn-icons-png.flaticon.com/512/309/309492.png" alt="Error de conexión" width="100">
            <h4>Inicia sesión para ver más</h4>
            <h1>Usuario:</h1>
            <div id="es-relativo">
                <input class="controls" type="text" name="user" id="user" placeholder="Usuario">
            </div>
            <h1>Contraseña:</h1>
            <div class="contenedor-contraseña">
                <input class="controls" type="password" name="pass" id="pass" placeholder="Contraseña">
                <i class="fas fa-eye-slash" id="alternarContraseña"></i>
            </div>
            <input class="botones" type="submit" value="Iniciar Sesión">
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
    <script>
        document.getElementById('alternarContraseña').addEventListener('click', function () {
            const passwordField = document.getElementById('pass');
            const isPassword = passwordField.type === 'password';
            passwordField.type = isPassword ? 'text' : 'password';
            this.classList.toggle('fa-eye-slash', !isPassword);
            this.classList.toggle('fa-eye', isPassword);
        });
    </script>
</body>
</html>
