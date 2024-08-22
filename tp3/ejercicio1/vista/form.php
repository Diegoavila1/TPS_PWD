  <?php
    include '../../../estructura/header.php';
  ?>


  <main class="container shadow-lg rounded-top" style="min-height: 600px; background-color : #00aaff ; width: 64%;">
  <div class="row ">

    <div class="col" id="content">
      <h1>Consigna: 1 </h1>
      <p class="pFont">
      Crear un formulario HTML que permita subir un archivo. <br>En el servidor se deberá 
      controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño 
      máximo permitido es de 2mb.<br> En caso que se cumplan las condiciones mostrar un link al archivo 
      cargado, en caso contrario mostrar un mensaje indicando el problema</p>
    </div>
  </div>

  <div class="row  mt-5">
    <div class="col">
      <div id="contenedorEj1" class="bg-body text-center rounded">
          <form method="POST" action="action/subirArchivo.php" enctype="multipart/form-data">
            Ingresa el archivo: <input type="file" name="miArchivo" id="miArchivo" />
            <button class="btn-volver" type="submit" value="Subir archivo">Enviar</button>
         </form>
      </div>


  </div>

  <div class="row  mt-5">
    <div class="col">
      <img src="../../../imagenes/formTp3Ej1.png" alt="" class="img-codigo">
    </div>
  </div>


</div>
    
</main>

<?php
    include '../../../estructura/footer.php';
  ?>

</body>

</html>