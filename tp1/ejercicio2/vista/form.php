  <?php
    include '../../../estructura/header.php';
  ?>
  
      <main class="container shadow-lg rounded-top" style="min-height: 600px; background-color : #00aaff ; width: 64%;">

              <div id="content"class="row">

                <div class="col">
                  <h1>Consigna: 2</h1>
                  <p>
                  Crear un script php que guarde en diferentes variables su nombre, apellido, edad
                  y dirección y luego muestre en pantalla estos datos con letra mayúscula. 
                  Cuando ejecute la pagina dentro del navegador, observe el código fuente y analice las
                  diferencias entre el código escrito y el código que esta viendo. </p>
                </div>
              </div>
            
              <div class="row mt-5">
                <div class="col">
                  <div id="contenedorEj1" class="bg-body rounded">

                      <form action="action/formAction.php" method="get" style="  text-align: center;">
                      <label for="">Ingrese las horas de cursada de jueves:</label>
                      <br> 
                      <input class="form-control ancho-input" type="" name="jueves" id=""  placeholder="Ejemplo : 2">
                      <br>
                      <label for="">Ingrese las horas de cursada de viernes:</label>
                      <br> 
                      <input class="form-control ancho-input" type="" name="viernes" id="" placeholder="Ejemplo : 4">
                      <br>
                      <button class="boton" type="submit">Enviar</button>
                    </form>

                  </div>
                </div>
              </div>

              <div class="row  mt-5">
                <div class="col">
                <img src="../../../imagenes/form2.png" alt="" class="img-codigo">
                </div>
              </div>


        </div>
        
      </main>
      <?php
    include '../../../estructura/footer.php';
  ?>

</body>
</html>