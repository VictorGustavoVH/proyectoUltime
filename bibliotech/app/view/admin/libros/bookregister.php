<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar libros</title>
    <link rel="stylesheet" href="app/combined.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="body-register">
    
    <section class="form-register">
        <img src="app/BOOK.png" alt="Error al cargar la imagen" width="100">
        <h4>Registro de libros</h4>
        <form action="http://localhost/bibliotech/?C=bookController&M=insert" method="post">
            <input class="controls" type="text" name="isbn" id="isbn" placeholder="ISBN" required>
            <input class="controls" type="text" name="title" id="title" placeholder="Titulo" required>
            <input class="controls" type="text" name="author" id="author" placeholder="Autor" required>
            <input class="controls" type="text" name="edit" id="edit" placeholder="Editorial" required>
            <input class="controls" type="text" name="cat" id="cat" placeholder="Categoria" required>
            <input class="controls" type="numbers" name="apublic" id="apublic" placeholder="Año de publicacion" required>
            <input class="controls" type="numbers" name="cant" id="cant" placeholder="Cantidad" required>
            <p><input class="botons" type="submit" value="Enviar"></p><br><br><br>
            <a href="http://localhost/bibliotech?C=bookController&M=callIndex" class="botons">Mostrar libros</a>
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
                    <li><a href="#">Política de Privacidad</a></li>|
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
