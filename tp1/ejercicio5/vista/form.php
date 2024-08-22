  <?php
    include '../../../estructura/header.php';
  ?>

  <main class="container shadow-lg rounded-top" style="min-height: 600px; background-color : #00aaff ; width: 64%;">

    <div class="row ">

      <div id="content" class="col">
        
        <h1>Consigna: 5</h1>
        <p>
          Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
          “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
          estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
          apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
          un mensaje que indique el tipo de estudios que posee y su sexo. </p>
      </div>
    </div>

    <div class="row  mt-5">
      <div class="col">
        <div id="contenedorEj1" class="bg-body rounded-top">

          <form action="action/formAction.php" method="get" style="text-align: center;">
            <label for="">Ingrese su nombre:</label>
            <input class="form-control ancho-input" type="text" name="nombre" id="" style="display:block" placeholder="nombre" required>
            <label for="">Ingrese su apellido:</label>
            <input class="form-control ancho-input" type="text" name="apellido" id="" style="display:block" placeholder="apellido" required>
            <label for="">Ingrese su edad</label>
            <input class="form-control ancho-input" type="number" name="edad" id="" style="display:block" placeholder="edad" required>
            <label for="">Ingrese su direccion:</label>
            <input class="form-control ancho-input" type="text" name="direccion" id="" style="display:block" placeholder="direccion" required>
          

        </div>

        <div class="contenedorSoporteDiv bg-body rounded-bottom">

        <ul class="list-unstyled">
            <li>
              <div class="form-check" style="margin-left:10%">
                <input class="form-check-input" type="radio" name="nivelEstudio" id="sinEstudios" value="sinEstudios" required>
                <label class="form-check-label" for="sinEstudios" style="margin-top: 0;">No tiene estudios </label>
              </div>
            </li>
            <li>
              <div class="form-check" style="margin-left:10%">
                <input class="form-check-input" type="radio" name="nivelEstudio" id="estPrimario" value="estPrimario" required>
                <label class="form-check-label" for="estPrimario" style="margin-top: 0;">Estudios primarios</label>
              </div>
            </li>
            <li>
              <div class="form-check" style="margin-left:10%">
                <input class="form-check-input" type="radio" name="nivelEstudio" id="estSecundario" value="estSecundario" required>
                <label class="form-check-label" for="estSecundario" style="margin-top: 0;">Estudios secundarios</label>
              </div>
            </li>
          </ul>

          <select class="form-select ancho-input" name="genero" style="margin: auto;" required>
            <option value="Femenino">Femenino</option>
            <option value="Masculino">Masculino</option>
          </select>
          <br>
          <button class="boton" type="submit">Enviar</button>

          </form>

        </div>
          
        
      </div>

      <div class="row  mt-5">
        <div class="col">
          <img src="../../../imagenes/form5Get.png" alt="" class="img-codigo">
        </div>
      </div>


    </div>
    </div>



  </main>

  <?php
    include '../../../estructura/footer.php';
  ?>


</body>

</html>