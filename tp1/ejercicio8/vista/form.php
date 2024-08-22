  <?php
    include '../../../estructura/header.php';
  ?>


  
 <main class="container shadow-lg rounded-top" style="min-height: 600px; background-color : #00aaff ; width: 64%;">

      <div class="row ">

            <div id="content" class="col">
                <h1>Consigna: 8</h1>
                <p>
                    La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
                    función de la edad y de la condición de estudiante del cliente.<br> Desea que sean los propios
                    clientes los que puedan calcular el valor de sus entradas a través de una página web.<br> Si
                    es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
                    de 12 años el precio es de $180, en cualquier otro caso el precio es de $300.<br> Diseñar un
                    formulario que solicite la edad y permita ingresar si se trata de un estudiante o no.<br> Con
                    un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
                    <br>Agregar un botón para limpiar el formulario y volver a consultar. </p>
            </div>
        </div>

        <div class="row  mt-5">
            <div class="col">
              <div id="contenedorEj1" class="bg-body text-center rounded">
                <h1>Cinem@s</h1>
                <form action="action/formAction.php" method="post">
                    <label for="">Ingrese la edad</label>
                    <input class="form-control"type="text" name="edad" placeholder="ejemplo : 15">
                    <select class="form-select" name="selects" id="" style=" width: 80%; margin: auto;">
                        <option value="ninguno">Ninguno</option>
                        <option value="estudiante">Estudiante</option>
                    </select>
                    <br>
                    <button class="boton" type="submit" name="" id="">Enviar</button>
                    <button class="botonDos" type="reset" name="" id="">Restablecer</button>

                </form>
              </div>

            </div>
        </div>

        <div class="row  mt-5">
            <div class="col">
                <img src="../../../imagenes/form8Post.png" alt="" class="img-codigo">
            </div>
        </div>


        </div>

        
 </main>

 <?php
    include '../../../estructura/footer.php';
  ?>


</body>
</html>