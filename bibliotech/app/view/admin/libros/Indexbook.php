<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="app/combined.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    
    <section>
    <link rel="stylesheet" href="app/styleindex.css">
    <h1><a href="http://localhost/bibliotech?C=bookController&M=CallInsert" class="botons">Insertar un nuevo libro</a></h1>
    <table class="table" border="3px solid #ddd">
        <thead>
            <tr border>
                <td>Titulo</td>
                <td>Autor</td>
                <td>Editorial</td>
                <td>Categoria</td>
                <td>Año de publicación</td>
                <td>Opciones</td>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($libros as $dato) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($dato['Titulo']) . "</td>";
                echo "<td>" . htmlspecialchars($dato['Autor']) . "</td>";
                echo "<td>" . htmlspecialchars($dato['Editorial']) . "</td>";
                echo "<td>" . htmlspecialchars($dato['Categoria']) . "</td>";
                echo "<td>" . htmlspecialchars($dato['Año_publicacion']) . "</td>";
                echo "<td>
                        <button class='btn-editar' onclick='editar(\"" . htmlspecialchars($dato['ISBN']) . "\")'>Editar</button>
                        <button class='btn-eliminar' onclick='eliminar(\"" . htmlspecialchars($dato['ISBN']) . "\")'>Eliminar</button>
                    </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <script>
        function editar(ISBN){
            window.location.href="http://localhost/bibliotech?C=bookController&M=callEdit&id="+ISBN;
        }
        function eliminar(ISBN){
            if(confirm("Realmente quieres eliminar al registro "+ ISBN+"?")){
                //alert("registro eliminado")
                window.location.href="http://localhost/bibliotech?C=bookController&M=delete&id="+ISBN;
            }
        }
    </script>
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
