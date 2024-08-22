  <?php
    include '../../../estructura/header.php';
  ?>


  <main class="container shadow-lg rounded-top" style="min-height: 600px; background-color : #00aaff ; width: 64%;">
  <div class="row ">

    <div class="col" id="content">
      <h1>Consigna: 2 </h1>
      <p class="pFont">
      Crear un formulario que permita subir un archivo.<br> En el servidor se deberá controlar 
      que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su 
      contenido en un textarea.
      <br>(OBS: Referencia a funciones para trabajar con archivos http://php.net/manual/en/ref.filesystem.php).</p>
    </div>
  </div>

  <div class="row  mt-5">
    <div class="col">
      <div id="contenedorEj1" class="text-center bg-body rounded">
      <form method="POST" action="../action/subirArchivo.php" enctype="multipart/form-data">
        Ingresa el archivo: <input type="file" name="miArchivo" id="miArchivo" />
        <button class="boton" type="submit" value="Subir archivo">Enviar</button>
      </form>
      </div>
  </div>

  <div class="row  mt-5">
    <div class="col">
      <img src="../../../imagenes/formTp3Ej2.png" alt="" class="img-codigo" alt="imagen de codigo">
    </div>
  </div>

</div>
    
</main>

<footer class="container-fluid d-flex justify-content-between bg-dark shadow-lg ">

<div class="row text-light">
  <ul class="" style="list-style-type: none; padding-left: 60px; margin-top:14% ; margin-bottom:14%;">
    <li>Diego Rios</li>
    <li>Miguel Soto</li>
    <li>Juan Cruz Geslowski </li>
    <li>Barquito </li>

  </ul>
</div>

<div class="row" style="margin-right: 50px; margin-top:10px;">
  <div class="col">
    <p class="text-light mt-5">Programacion Web Dinamica 2024 @</p>
  </div>

</div>
</footer>

</body>

</html>