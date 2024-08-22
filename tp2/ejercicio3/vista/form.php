  <?php
    include '../../../estructura/header.php';
  ?>


  <main class="container shadow-lg rounded-top" style="min-height: 600px; background-color : #00aaff ; width: 64%;">

    <div class="row ">

      <div class="col" id="content">
        <h1>Consigna: 1 </h1>
        <p class="pFont">
          Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
          llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
          enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
          respuesta, que permita volver a la página anterior.</p>
      </div>
    </div>

    <div class="row ">
      <div class="col">
        <div class="container mt-5 shadow p-3 mb-5 bg-body rounded bg-dark" style="max-width: 40%; justify-content: center;">
          <h1 class="mb-4">Member Login</h1>
          <form id="form" action="verificaPass.php" method="post">
              <div class="mb-3">
              <label for="name" class="form-label">Nombre:</label>
              <input type="text" id="name" name="name" class="form-control">
              </div>
              <div class="mb-3">
              <label for="password" class="form-label">Contraseña:</label>
              <input type="password" id="password" name="password" class="form-control">
              </div>
              <button type="submit" class="btn btn-success"
              style="width: 60%; margin: auto; display: flex; justify-content: center;">Login
              </button>
          </form>
          <div id="resultado"></div>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col">
        <img src="../../../imagenes/formTp2Ej1.png" alt="" class="img-codigo">
      </div>
    </div>


    </div>

  </main>

  <?php
    include '../../../estructura/footer.php';
  ?>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
  <script src="../vista/validar_jquery.js"></script>

</body>

</html>