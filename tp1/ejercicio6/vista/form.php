 <?php
    include '../../../estructura/header.php';
  ?>


 <main class="container shadow-lg rounded-top" style="min-height: 600px; background-color : #00aaff ; width: 64%;">

         <div class="row ">

            <div class="col">
                <h1>Consigna: 6</h1>
                <p>
                    Ejercicio 6
                    Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
                    deportes que practica (futbol, basket, tennis, voley) un alumno. 
                    <br>Mostrar en la página que procesa el formulario la cantidad de deportes que practica. </p>
            </div>
        </div>

        <div class="row  mt-5">
            <div class="col">

              <div id="contenedorEj6" class="bg-body rounded">

              <form class="checkForm" action="action/formAction.php" method="get">
                    <div class="form-check"  style="margin-left: 7%;">
                      <input class="form-check-input" type="checkbox" name="futbol" id="futbol">
                      <label class="form-check-label" for="futbol">
                        Fútbol
                      </label>
                    </div>
                    <div class="form-check" style="margin-left: 7%;">
                      <input class="form-check-input" type="checkbox" name="basket" id="basket">
                      <label class="form-check-label" for="basket">
                        Basket
                      </label>
                    </div>
                    <div class="form-check"  style="margin-left: 7%;">
                      <input class="form-check-input" type="checkbox" name="tennis" id="tennis">
                      <label class="form-check-label" for="tennis">
                        Tenis
                      </label>
                    </div>
                    <div class="form-check"  style="margin-left: 7%;">
                      <input class="form-check-input" type="checkbox" name="voley" id="voley">
                      <label class="form-check-label" for="voley">
                        Vóley
                      </label>
                    </div>
                    <button class="boton" type="submit"  style="margin-left: 6%;">Enviar</button>
                </form>

              </div>
            </div>
        </div>

        <div class="row  mt-5">
            <div class="col">
                <img src="../../../imagenes/form6Get.png" alt="" class="img-codigo">
            </div>
        </div>


        </div> 


        
 </main>

 <?php
    include '../../../estructura/footer.php';
  ?>


</body>
</html>