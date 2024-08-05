<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['username'])){
    $vista ="app/view/admin/usuarios/login.php";
    include_once("app/view/admin/plantillaView2.php");
}
$user = $_SESSION['username'];
?>
<section>
<table class="table" border="3px solid #ddd">
        <thead>
            <tr>
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
        foreach ($books as $book) {
            $title = htmlspecialchars($book['Titulo']);
            $user = htmlspecialchars($user); // Asegúrate de escapar las variables para evitar problemas de seguridad
            echo "<tr>";
            echo "<td>" . $title . "</td>";
            echo "<td>" . htmlspecialchars($book['Autor']) . "</td>";
            echo "<td>" . htmlspecialchars($book['Editorial']) . "</td>";
            echo "<td>" . htmlspecialchars($book['Categoria']) . "</td>";
            echo "<td>" . htmlspecialchars($book['Año_publicacion']) . "</td>";
            echo "<td>
                    <form method='POST' action='http://localhost/bibliotech/?C=accionesController&M=regPrest' style='display:inline;' onsubmit='return confSolicitud(\"" . $title . "\");'>
                        <input type='hidden' name='titulo' value='" . $title . "'>
                        <input type='hidden' name='user' value='" . $user . "'>
                        <button type='submit' class='btn-solicitar'>Solicitar préstamo</button>
                    </form>
                    <form method='POST' action='http://localhost/bibliotech/?C=accionesController&M=formDate' style='display:inline;' onsubmit='return confReserva(\"" . $title . "\");'>
                        <input type='hidden' name='titulo' value='" . $title . "'>
                        <input type='hidden' name='user' value='" . $user . "'>
                        <button type='submit' class='btn-reservar'>Reservar</button>
                    </form>
                </td>";
            echo "</tr>";
        }
        ?>

        </tbody>
    </table>
    <script>
        function confSolicitud(TITULO){
            return confirm("¿Estás seguro de que deseas solicitar el libro: "+ TITULO +"?")
        }
    </script>
</section>