  <?php
    include '../../../estructura/header.php';
  ?>

  
    <main class="container shadow-lg rounded-top" style="min-height: 600px; background-color : #00aaff ; width: 64%;">

        <div class="row ">

            <div id= "content" class="col">
                <h1>Consigna: 7</h1>
                <p>
                    Crear una página con un formulario que contenga dos input de tipo text y un select. En
                    los inputs se ingresarán números y el select debe dar la opción de una operación
                    matemática que podrá resolverse usando los números ingresados. En la página que
                    procesa la información se debe mostrar por pantalla la operación seleccionada, cada
                    uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
                    formulario: </p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
              
            <div id="contenedorEj1" class="bg-body rounded">
                
               <form action="formAction.php" method="get" style="text-align: center;">

                    <label for="">Ingrese un numero X</label>
                    <input class="form-control ancho-input" type="number" name="numUno" id="" placeholder="Ejemplo : 2" required>
                    <label for="">Ingrese un numero Y</label>
                    <input class="form-control ancho-input" type="number" name="numDos" id="" placeholder="Ejemplo : 5" required>
                    <select class="form-select ancho-input" name="selects" style="margin: auto;">
                        <option value="sumar">Sumar</option>
                        <option value="restar">Restar</option>
                        <option value="multiplicar">Multiplicar</option>
                    </select>
                    <br>
                    <button class="boton" type="submit">Volver</button>
                  
                </form>

              </div>
              </div>


            </div>
        </div>

        <div class="row  mt-5">
            <div class="col">
                <img src="../../../imagenes/form7Get.png" alt="" class="img-codigo">
            </div>
        </div>


        </div>

    </main>
    <?php
    include '../../../estructura/footer.php';
  ?>


</body>

</html>