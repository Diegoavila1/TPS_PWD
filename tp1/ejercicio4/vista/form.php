    <?php
        include '../../../estructura/header.php';
      ?>

      <main class="container shadow-lg rounded-top" style="min-height: 600px; background-color : #00aaff ; width: 64%;">

                    
      <div id="content"class="row ">
            <div class="col" id="content">
                <h1>Consigna: 4</h1>
                <p>
                Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
                esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
                persona es mayor de edad o no; (si la edad es mayor o igual a 18).
                Enviar los datos usando el método GET y luego probar de modificar los datos
                directamente en la url para ver los dos posibles mensajes. </p>
      </div>
      </div>

        <div class="row mt-5">
                <div class="col">
                <div id="contenedorEj1" class="bg-body rounded">

                    <form action="formAction.php" class="formulario" method="get" style="text-align:center;">
                        <label for="">Ingrese su nombre :</label>
                        <input class="form-control ancho-input" type="text" name="nombre" id="" style="display:block" placeholder="Nombre" required>
                        <label for="">Ingrese su apellido :</label> 
                        <input class="form-control ancho-input" type="text" name="apellido" id="" style="display:block" placeholder="Apellido" required>
                        <label for="">Ingrese su edad :</label>
                        <input class="form-control ancho-input" type="number" name="edad" id="" style="display:block" placeholder="Edad" required>
                        <label for="">Ingrese su direcion :</label>  
                        <input class="form-control ancho-input" type="text" name="direccion" id="" style="display:block" placeholder="Direccion" required>
                        <button type="submit" class="boton">Enviar</button>
                    </form>

                </div>
            </div>
        </div>
      <div class="fotosPostGet">
        <div class="row  mt-5" id="getfoto">
                <div class="col">
                  <h1>GET</h1>
                  <img src="../../../imagenes/form4Get.png" alt="" class="img-codigo">
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