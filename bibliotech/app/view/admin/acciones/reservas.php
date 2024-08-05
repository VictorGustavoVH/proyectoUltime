<section class="form-register">
  <h4>Reserva de libros</h4>
  <form action="http://localhost/bibliotech/?C=accionesController&M=regReserv" method="post">
    <p><Label>Escoge la fecha que desees reservar</Label></p>
    <input class="controls" type="date" name="fReserva" id="fReserva" placeholder="2024/01/01" required>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $data=array(
            'titulo'=>$_POST['titulo'],
            'user'=>$_POST['user']
        );
    echo "<input class='controls' type='hidden' name='title' id='title' value='" . $data['titulo'] . "'>";
    echo "<input class='controls' type='hidden' name='user' id='user' value='" . $data['user'] . "'>";
    }
    ?>
    <p><input class="botons" type="submit" value="Enviar"></p>
  </form>
</section>