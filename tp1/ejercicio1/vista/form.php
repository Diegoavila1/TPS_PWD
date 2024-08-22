  <?php
    include '../../../estructura/header.php';
  ?>

  <main class="container shadow-lg rounded-top" style="min-height: 600px; background-color : #00aaff ; width: 64%;">
  <div class="row">

    <div id="content" class="col">
      <h1>Consigna: 1 </h1>
      <p class="pFont">
        Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
        llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
        enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
        respuesta, que permita volver a la página anterior.</p>
    </div>
  </div>

  <div class="row  mt-5">
    <div class="col">
    <div id="contenedorEj1" class="bg-body rounded">

    <form action="action/action.php" method="get" style="  text-align: center;">
          <label for="num" class="">Ingrese un número:</label>
          <input type="number" class="form-control ancho-input" name="num" id="num" placeholder="Escribe un número">
          <button type="submit" class="boton">Enviar</button>
    </form>
    </div>

  </div>

  <div class="row  mt-5">
    <div class="col">
      <img src="../../../imagenes/form1.png" alt="" class="img-codigo">
    </div>
  </div>


</div>
    
</main>
<?php
    include '../../../estructura/footer.php';
  ?>


</body>

</html>